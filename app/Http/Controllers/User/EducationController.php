<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Models\Division;
use App\Models\Education;
use App\Models\MediaType;
use Illuminate\View\View;
use App\Models\University;
use App\Models\Qualification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\User\StoreEducationRequest;

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
        $mediaTypes = [
            MediaType::transcript,
            MediaType::character,
            MediaType::council,
            MediaType::equivalence,
        ];

        $education = Education::create($request->validated());

        foreach ($mediaTypes as $mediaTypeId) {
            $mediaPath = $this->mediaService->handleMediaFromRequest(
                $request->file($this->getInputNameByMediaType($mediaTypeId)),
                auth()->user()->applicant_id,
                $mediaTypeId
            );

            if ($mediaPath) {
                $education->media()->create($mediaPath);
            }
        }

        return redirect()->route('education.index')
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
        $mediaTypes = [
            MediaType::transcript,
            MediaType::character,
            MediaType::council,
            MediaType::equivalence,
        ];

        $existingMedia = $education->media()->whereIn('media_type_id', $mediaTypes)->get()->keyBy('media_type_id');

        foreach ($mediaTypes as $mediaTypeId) {
            $mediaPath = $this->mediaService->handleMediaFromRequest(
                $request->file($this->getInputNameByMediaType($mediaTypeId)),
                auth()->user()->applicant_id,
                $mediaTypeId,
                $existingMedia->get($mediaTypeId)
            );

            if ($mediaPath) {
                $education->media()->updateOrCreate(['id' => optional($existingMedia->get($mediaTypeId))->id], $mediaPath);
            }
        }

        $education->update($request->validated());

        return redirect()->route('education.index')
            ->with('message', 'Education updated successfully.');
    }

    public function destroy(Education $education): RedirectResponse
    {
        $education->delete();

        return back();
    }

    private function getInputNameByMediaType(int $mediaTypeId): string
    {
        return match ($mediaTypeId) {
            MediaType::transcript => 'transcript',
            MediaType::character => 'character',
            MediaType::council => 'council',
            MediaType::equivalence => 'equivalence',
            default => throw new \InvalidArgumentException("Invalid media type ID: {$mediaTypeId}"),
        };
    }
}
