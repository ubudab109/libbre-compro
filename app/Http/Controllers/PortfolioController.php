<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    use FileTrait;

    public function index()
    {
        $portfolio = Portfolio::select('id', 'uuid', 'title', 'sub_title', 'description', 'images')->get();
        return response()->json($portfolio, 200);
    }

    public function store(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'images' => ['array'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:2048']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 422);
        }

        DB::beginTransaction();
        try {
            $input = $request->all();
            if ($request->has('images')) {
                $encodedImage = [];
                $images = $request->images;
                Log::info($images);
                foreach ($images as $image) {
                    $storeFile = $this->storeFile('portfolio/', $image);
                    $encodedImage[] = $storeFile;
                }
                $input['images'] = json_encode($encodedImage);
            }
            $portfolio = Portfolio::create($input);
            DB::commit();
            return response()->json($portfolio, 201);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json($err->getMessage(), 500);
        }
    }

    public function show(string $uuid)
    {
        $portfolio = Portfolio::where('uuid', $uuid)->first();
        return response()->json($portfolio, 200);
    }

    public function update(Request $request, string $uuid)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'images' => ['array'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:2048']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 422);
        }

        DB::beginTransaction();
        try {
            $input = $request->all();
            $portfolio = Portfolio::where('uuid', $uuid)->first();
            if ($request->has('images')) {
                $encodedImage = [];
                $images = $request->images;
                foreach ($images as $image) {
                    $this->deleteFile($image);
                    $storeFile = $this->storeFile('portfolio', $image);
                    $encodedImage[] = $storeFile;
                }
                $input['images'] = json_encode($encodedImage);
            }
            $portfolio->update($input);
            $newData = Portfolio::where('uuid', $uuid)->first();
            DB::commit();
            return response()->json($newData, 201);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json($err->getMessage(), 500);
        }
    }

    public function destroy(string $uuid)
    {
        Portfolio::where('uuid', $uuid)->delete();
        return response()->json(null, 204);
    }
}
