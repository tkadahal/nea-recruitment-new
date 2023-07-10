<?php

declare(strict_types=1);

namespace App\Services;

use App\Helpers\MediaHelper;
use Illuminate\Http\Request;

class MediaService
{
    public function handleMultipleMediaFromRequest(Request $request, string $storePath, $queryFile = null): array
    {
        $mediaFiles = [];

        if ($request->hasFile('document')) {
            foreach ($request->file('document') as $file) {
                $mediaFiles[] = MediaHelper::saveMedia($request->mediaType, $file, $storePath);
            }
        }

        return $mediaFiles;
    }

    public function handleMediaFromRequest($document, $storePath, $mediaType, $queryFile = null)
    {
        if (! $document) {
            return;
        } else {
            if (isset($queryFile) && ! empty($queryFile)) {
                MediaHelper::deleteFile($queryFile);
            }

            return MediaHelper::saveMedia($mediaType, $document, $storePath);
        }
    }
}
