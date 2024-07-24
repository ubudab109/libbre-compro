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
        // Get the original file name
        $originalFileName = $file->getClientOriginalName();
        
        // Determine the file system configuration
        $fileSystem = config('filesystems.default');
        
        // Save the file to the specified path with its original name
        Storage::disk($fileSystem)->put("{$path}{$originalFileName}", file_get_contents($file->getRealPath()));
        
        // Construct the file URL based on the file system
        if ($fileSystem == 'local' || $fileSystem == 'public') {
            $fileUrl = URL::to("storage/{$path}{$originalFileName}");
        } else {
            $fileUrl = Storage::url("{$path}{$originalFileName}");
        }
        
        return $fileUrl;
    }

    public static function deleteFile(string $url)
    {
        $fileSystem = config('filesystems.default');
        $filePath = parse_url($url, PHP_URL_PATH);
        // Ensure the path is correctly formed
        $pathFile = str_replace('/storage/', '', $filePath);
        // Check if the file exists
        $fileExists = Storage::disk($fileSystem)->exists($pathFile);

        if ($fileExists) {
            // Attempt to delete the file
            $isDeleted = Storage::disk($fileSystem)->delete($pathFile);
            return $isDeleted;
        } else {
            return false;
        }
    }
}
