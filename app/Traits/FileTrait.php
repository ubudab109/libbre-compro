<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

trait FileTrait
{
    public static function storeFile(string $path, UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $imageName = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . '.' . $extension;
        $fileSystem = config('filesystems.default');
        Storage::disk($fileSystem)->put("{$path}{$imageName}", file_get_contents($file->getRealPath()));
        if ($fileSystem == 'local' || $fileSystem == 'public') {
            $fileUrl = URL::to("storage/{$path}{$imageName}");
        } else {
            $fileUrl = Storage::url($imageName);
        }
        return $fileUrl;
    }

    public static function deleteFile(string $url)
    {
        $fileSystem = config('filesystems.default');
        $filePath = parse_url($url, PHP_URL_PATH);
        $pathFile = str_replace('/storage/', '', $filePath);
        $fileExists = Storage::disk($fileSystem)->exists($pathFile);
        if ($fileExists) {
            $isDeleted = Storage::disk($fileSystem)->delete($filePath);
            return $isDeleted;
        } else {
            return false;
        }
    }
}