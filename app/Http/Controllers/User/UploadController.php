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
        $photoPath = $this->mediaService->handleMediaFromRequest($request->photo, auth()->id(), MediaType::photo);

        $signPath = $this->mediaService->handleMediaFromRequest($request->sign, auth()->id(), MediaType::sign);

        $citFrontPath = $this->mediaService->handleMediaFromRequest($request->citizenship_front, auth()->id(), MediaType::citizenshipFront);

        $citBackPath = $this->mediaService->handleMediaFromRequest($request->citizenship_back, auth()->id(), MediaType::citizenshipBack);

        $samabeshiPath = $this->mediaService->handleMediaFromRequest($request->citizenship_back, auth()->id(), MediaType::samabeshi);

        if ($photoPath) {
            auth()->user()->media()->create($photoPath);
        }
        if ($signPath) {
            auth()->user()->media()->create($signPath);
        }
        if ($citFrontPath) {
            auth()->user()->media()->create($citFrontPath);
        }
        if ($citBackPath) {
            auth()->user()->media()->create($citBackPath);
        }
        if ($samabeshiPath) {
            auth()->user()->media()->create($samabeshiPath);
        }

        return redirect()->route('application.index');
    }
}
