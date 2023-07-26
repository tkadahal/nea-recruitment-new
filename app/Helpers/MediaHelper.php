<?php

declare(strict_types=1);

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MediaHelper
{
    public static function saveMedia($mediaType, $file, $modelName): array
    {
        $uuid = (string) Str::uuid();
        $filename = $file->getClientOriginalName();

        $path = 'public/' . $modelName . '/' . $uuid;

        if (!File::exists(storage_path("app/{$path}"))) {
            File::makeDirectory(storage_path("app/{$path}"), 0777, true);
        }

        $file->storeAs($path, $filename);
        $mediaFiles = [
            'name' => $file->hashName(),
            'file_name' => $filename,
            'mime_type' => $file->getClientMimeType(),
            'path' => $path,
            'disk' => config('app.uploads.disk'),
            'file_hash' => $uuid,
            'collection' => $modelName,
            'size' => $file->getSize(),
            'media_type_id' => $mediaType,
        ];

        return $mediaFiles;
    }

    public static function deleteFile($queryFile): bool
    {
        $directory = storage_path('app/public/') . $queryFile->collection . '/' . $queryFile->file_hash;

        self::deleteIfExists($directory . '/' . $queryFile->file_name);

        if (is_dir($directory) && count(scandir($directory)) == 2) {
            rmdir($directory);
        }

        return true;
    }

    public static function deleteIfExists($file): void
    {
        if (file_exists($file)) {
            unlink($file);
        }
    }
}
