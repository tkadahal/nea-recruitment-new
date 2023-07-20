<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreEducationRequest;
use App\Models\Division;
use App\Models\Education;
use App\Models\MediaType;
use App\Models\Qualification;
use App\Models\University;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class EducationController extends Controller
{
    public function index(): View
    {
        $educations = Education::with(
            [
                'university',
                'qualification',
                'division',
                'media.mediaType'
            ]
        )
            ->latest()
            ->where('user_id', auth()->id())
            ->get();

        return view('user.education.index', compact('educations'));
    }

    public function create(): View
    {
        $qualifications = Qualification::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universities = University::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $divisions = Division::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('user.education.create', compact('qualifications', 'universities', 'divisions'));
    }

    public function store(StoreEducationRequest $request): RedirectResponse
    {
        $transcriptPath = $this->mediaService->handleMediaFromRequest($request->transcript, auth()->id(), MediaType::transcript);

        $characterPath = $this->mediaService->handleMediaFromRequest($request->character, auth()->id(), MediaType::character);

        $councilPath = $this->mediaService->handleMediaFromRequest($request->council, auth()->id(), MediaType::council);

        $equivalencePath = $this->mediaService->handleMediaFromRequest($request->equivalence, auth()->id(), MediaType::equivalence);

        $education = Education::create($request->validated());

        if ($transcriptPath) {
            $education->media()->create($transcriptPath);
        }

        if ($characterPath) {
            $education->media()->create($characterPath);
        }

        if ($councilPath) {
            $education->media()->create($councilPath);
        }

        if ($equivalencePath) {
            $education->media()->create($equivalencePath);
        }

        return redirect()->route(route: 'education.index')
            ->with('message', 'Education created successfully.');
    }

    public function show(Education $education): View
    {
        abort_if(Gate::denies('education_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.educations.show', compact('education'));
    }

    public function edit(Education $education): View
    {
        $education->load(['university', 'qualification', 'division', 'media']);

        $qualifications = Qualification::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universities = University::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $divisions = Division::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('user.education.edit', compact('education', 'qualifications', 'universities', 'divisions'));
    }

    public function update(StoreEducationRequest $request, Education $education): RedirectResponse
    {
        $existingTranscript = $education->media()->where('media_type_id', MediaType::transcript)->first();
        $existingCharacter = $education->media()->where('media_type_id', MediaType::character)->first();
        $existingCouncil = $education->media()->where('media_type_id', MediaType::council)->first();
        $existingEquivalence = $education->media()->where('media_type_id', MediaType::equivalence)->first();

        $transcriptPath = $this->mediaService->handleMediaFromRequest($request->transcript, auth()->id(), MediaType::transcript, $existingTranscript);
        $characterPath = $this->mediaService->handleMediaFromRequest($request->character, auth()->id(), MediaType::character, $existingCharacter);
        $councilPath = $this->mediaService->handleMediaFromRequest($request->council, auth()->id(), MediaType::council, $existingCouncil);
        $equivalencePath = $this->mediaService->handleMediaFromRequest($request->equivalence, auth()->id(), MediaType::equivalence, $existingEquivalence);

        $education->update($request->validated());

        if ($transcriptPath) {
            $education->media()->updateOrCreate(['id' => optional($existingTranscript)->id], $transcriptPath);
        }
        if ($characterPath) {
            $education->media()->updateOrCreate(['id' => optional($existingCharacter)->id], $characterPath);
        }
        if ($councilPath) {
            $education->media()->updateOrCreate(['id' => optional($existingCouncil)->id], $councilPath);
        }
        if ($equivalencePath) {
            $education->media()->updateOrCreate(['id' => optional($existingEquivalence)->id], $equivalencePath);
        }

        return redirect()->route(route: 'education.index')
            ->with('message', 'Education updated successfully.');
    }

    public function destroy(Education $education): RedirectResponse
    {
        $education->delete();

        return back();
    }
}
