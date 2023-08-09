<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUploadRequest;
use App\Models\MediaType;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UploadController extends Controller
{
    public function index(): View
    {
        $user = auth()->user()->load(['media']);

        return view('user.upload', compact('user'));
    }

    public function store(StoreUploadRequest $request): RedirectResponse
    {
        $mediaTypes = [
            MediaType::photo,
            MediaType::sign,
            MediaType::citizenshipFront,
            MediaType::citizenshipBack,
            MediaType::samabeshi,
        ];

        $existingMedia = auth()->user()->media()->whereIn('media_type_id', $mediaTypes)->get()->keyBy('media_type_id');

        foreach ($mediaTypes as $mediaTypeId) {
            $mediaPath = $this->mediaService->handleMediaFromRequest(
                $request->file($this->getInputNameByMediaType($mediaTypeId)),
                auth()->user()->applicant_id,
                $mediaTypeId,
                $existingMedia->get($mediaTypeId)
            );

            if ($mediaPath) {
                auth()->user()->media()->updateOrCreate(['id' => optional($existingMedia->get($mediaTypeId))->id], $mediaPath);
            }
        }

        return redirect()->route('preview')->with('message', 'Files Uploaded Successfully');
    }

    private function getInputNameByMediaType(int $mediaTypeId): string
    {
        return match ($mediaTypeId) {
            MediaType::photo => 'photo',
            MediaType::sign => 'sign',
            MediaType::citizenshipFront => 'citizenship_front',
            MediaType::citizenshipBack => 'citizenship_back',
            MediaType::samabeshi => 'samabeshi',
            default => throw new \InvalidArgumentException("Invalid media type ID: {$mediaTypeId}"),
        };
    }
}
