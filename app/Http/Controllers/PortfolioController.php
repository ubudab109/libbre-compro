<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaginationResource;
use App\Models\Portfolio;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    use FileTrait;

    public function index(Request $request)
    {
        $portfolio = Portfolio::select('id', 'uuid', 'title', 'sub_title', 'description', 'images')
        ->when($request->has('keyword') && !empty($request->keyword), function ($query) use ($request) {
            $query->where('title', 'LIKE', '%'. $request->keyword .'%')
            ->orWhere('sub_title', 'LIKE', '%'. $request->keyword .'%')
            ->orWhere('description', 'LIKE', '%'. $request->keyword .'%');
        })
        ->paginate($request->show ?? 10);
        $resource = new PaginationResource($portfolio);
        return response()->json([
            'error' => false,
            'message' => 'Data Fetched Successfully',
            'data' => $resource,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'images' => ['array'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:2048']
        ]);
        Log::info($request->all());
        Log::info('ASFDASD', [$request->files]);
        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()->all(),
                'data' => null,
            ], 422);
        }

        DB::beginTransaction();
        try {
            $input = $request->all();
            if ($request->has('images')) {
                $encodedImage = [];
                $images = $request->images;
                foreach ($images as $image) {
                    $storeFile = $this->storeFile('portfolio/', $image);
                    $encodedImage[] = $storeFile;
                }
                $input['images'] = json_encode($encodedImage);
            }
            $portfolio = Portfolio::create($input);
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Data created successfully',
                'data' => $portfolio,
            ], 201);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json([
                'error' => false,
                'message' => $err->getMessage(),
                'data' => null,
            ], 500);
        }
    }

    public function show(string $uuid)
    {
        $portfolio = Portfolio::where('uuid', $uuid)->first();
        $portfolio->images = json_decode($portfolio->images);
        return response()->json([
            'error' => false,
            'message' => 'Data fetched successfully',
            'data' => $portfolio,
        ], 200);
    }

    public function update(Request $request, string $uuid)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'images' => ['array'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:2048'],
            'old_images' => ['array'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()->all(),
                'data' => null,
            ], 422);
        }

        DB::beginTransaction();
        try {
            $input = $request->all();
            $portfolio = Portfolio::where('uuid', $uuid)->first();
            $encodedImage = [];
            if ($request->has('images')) {
                $images = $request->images;
                foreach ($images as $image) {
                    $this->deleteFile($image);
                    $storeFile = $this->storeFile('portfolio', $image);
                    $encodedImage[] = $storeFile;
                }
            }
            $input['images'] = json_encode(array_merge($encodedImage, $request->old_images ?? []));
            $portfolio->update($input);
            $newData = Portfolio::where('uuid', $uuid)->first();
            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'Data updated succesfully',
                'data' => $newData
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

    public function destroy(string $uuid)
    {
        Portfolio::where('uuid', $uuid)->delete();
        return response()->json(null, 204);
    }
}
