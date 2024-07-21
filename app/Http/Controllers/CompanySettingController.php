<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CompanySettingController extends Controller
{
    use FileTrait;

    public function getCompanySettings()
    {
        $settings = CompanySetting::all();
        return response()->json([
            'error' => true,
            'message' => 'Data created successfully',
            'data' => $settings,
        ]);
    }

    public function updateCompanySetting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => ['required'],
            'value' => [''],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()->all(),
                'data' => null
            ], 422);
        }

        DB::beginTransaction();
        try {
            $input = $request->all();
            $companySetting = CompanySetting::where('slug', $input['slug'])->first();
            if (!empty($request->value)) {
                if ($request->hasFile('value')) {
                    $this->deleteFile($companySetting->value);
                    $storeFile = $this->storeFile('compro/', $input['value']);
                    $input['value'] = $storeFile;
                }
                $companySetting->update([
                    'value' => $input['value']
                ]);
            }
            $newCompany = CompanySetting::all();
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Data Created Successfully',
                'data' => $newCompany,
            ], 201);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => $err->getMessage(),
                'data' => null,
            ], 500);
        }
    }
}
