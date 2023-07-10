<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class MediaController extends Controller
{
    public function download(Media $media): Response
    {
        $path = Storage::disk($media->disk)->path($media->path.'/'.$media->file_name);

        return response()->download($path, $media->file_name, ['Content-Type' => $media->mime_type]);
    }
}
