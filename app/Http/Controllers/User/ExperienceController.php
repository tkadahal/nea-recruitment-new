<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreExperienceRequest;
use App\Models\Experience;
use App\Models\MediaType;
use App\Models\RecruitmentType;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ExperienceController extends Controller
{
    public function index(): View
    {
        $experiences = Experience::latest()->where('user_id', auth()->id())->get();
        $totalDuration = CarbonInterval::create();
        $totalYears = 0;
        $totalMonths = 0;
        $totalDays = 0;

        foreach ($experiences as $experience) {
            $experiencePeriod = CarbonInterval::months($experience->experience_period);

            if ($experiencePeriod->totalMonths === 0) {
                $formattedExperiencePeriod = '0 months';
            } else {
                $formattedExperiencePeriod = $experiencePeriod->cascade()->forHumans(['parts' => 3]);
            }

            $experience->formattedExperiencePeriod = $formattedExperiencePeriod;

            $totalDuration = $totalDuration->add($experiencePeriod);

            $totalYears += $experiencePeriod->years;
            $totalMonths += $experiencePeriod->months;
            $totalDays += $experiencePeriod->days;
        }

        $totalDuration = $totalDuration->addYears($totalYears)->addMonths($totalMonths);

        $totalDurationFormatted = '';

        if ($totalYears > 0) {
            $totalDurationFormatted .= "{$totalYears} year";
            if ($totalYears > 1) {
                $totalDurationFormatted .= 's';
            }
            $totalDurationFormatted .= ', ';
        }

        if ($totalMonths > 0) {
            $totalDurationFormatted .= "{$totalMonths} month";
            if ($totalMonths > 1) {
                $totalDurationFormatted .= 's';
            }
            $totalDurationFormatted .= ', ';
        }

        if ($totalDays > 0) {
            $totalDurationFormatted .= "{$totalDays} day";
            if ($totalDays > 1) {
                $totalDurationFormatted .= 's';
            }
        }

        $totalDurationFormatted = rtrim($totalDurationFormatted, ', ');

        return view('user.experience.index', compact('experiences', 'totalDurationFormatted'));
    }

    public function create(): View
    {
        $recruitmentTypes = RecruitmentType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('user.experience.create', compact('recruitmentTypes'));
    }

    public function store(StoreExperienceRequest $request): RedirectResponse
    {
        $path = $this->mediaService->handleMediaFromRequest($request->experience_certificate, auth()->id(), MediaType::experience);

        $validated_input = $request->validated();

        $validated_input['experience_period'] = ($validated_input['date_format'] == 'BS')
            ? Carbon::parse($validated_input['ad_experience_from'])->diffInMonths(Carbon::parse($validated_input['ad_experience_to']))
            : Carbon::parse($validated_input['start_date'])->diffInMonths(Carbon::parse($validated_input['end_date']));

        $experience = Experience::create($validated_input);

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

        $validated_input = $request->validated();

        $validated_input['experience_period'] = ($validated_input['date_format'] == 'BS')
            ? Carbon::parse($validated_input['ad_experience_from'])->diffInMonths(Carbon::parse($validated_input['ad_experience_to']))
            : Carbon::parse($validated_input['start_date'])->diffInMonths(Carbon::parse($validated_input['end_date']));

        $experience->update($validated_input);

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
