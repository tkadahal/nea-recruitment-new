<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreExperienceRequest;
use App\Models\Experience;
use App\Models\MediaType;
use App\Models\RecruitmentType;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ExperienceController extends Controller
{
    public function index(): View
    {
        $experiences = Experience::all();

        return view('user.experience.index', compact('experiences'));
    }

    public function create(): View
    {
        $recruitmentTypes = RecruitmentType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('user.experience.create', compact('recruitmentTypes'));
    }

    public function store(StoreExperienceRequest $request): RedirectResponse
    {
        $path = $this->mediaService->handleMediaFromRequest($request->experience_certificate, auth()->id(), MediaType::experience);

        $experience = Experience::create($request->validated());

        if ($path) {
            $experience->media()->create($path);
        }

        return redirect()->route('experience.index');
    }

    public function edit(Experience $experience): View
    {
        $recruitmentTypes = RecruitmentType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $experience->load(['recruitmentType', 'media']);

        return view('user.experience.edit', compact('experience', 'recruitmentTypes'));
    }

    public function update(StoreExperienceRequest $request, Experience $experience): RedirectResponse
    {
        $existingCertificate = $experience->media()->where('media_type_id', MediaType::transcript)->first();

        $certificatePath = $this->mediaService->handleMediaFromRequest($request->experience_certificate, auth()->id(), MediaType::experience, $existingCertificate);

        $experience->update($request->validated());

        if ($certificatePath) {
            $experience->media()->updateOrCreate(['id' => optional($existingCertificate)->id], $certificatePath);
        }

        return redirect()->route(route: 'experience.index')
            ->with('message', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience): RedirectResponse
    {
        $experience->delete();

        return back();
    }
}
