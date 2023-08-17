<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreTrainingRequest;
use App\Models\MediaType;
use App\Models\Training;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TrainingController extends Controller
{
    public function index(): View
    {
        $trainings = Training::latest()->where('user_id', auth()->id())->get();
        $totalDuration = CarbonInterval::create();
        $totalYears = 0;
        $totalMonths = 0;
        $totalDays = 0;

        foreach ($trainings as $training) {
            $trainingPeriod = CarbonInterval::months($training->training_period);

            if ($trainingPeriod->totalMonths === 0) {
                $formattedTrainingPeriod = '0 months';
            } else {
                $formattedTrainingPeriod = $trainingPeriod->cascade()->forHumans(['parts' => 3]);
            }

            $training->formattedTrainingPeriod = $formattedTrainingPeriod;

            $totalDuration = $totalDuration->add($trainingPeriod);

            $totalYears += $trainingPeriod->years;
            $totalMonths += $trainingPeriod->months;
            $totalDays += $trainingPeriod->days;
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

        return view('user.training.index', compact('trainings', 'totalDurationFormatted'));
    }

    public function create(): View
    {
        return view('user.training.create');
    }

    public function store(StoreTrainingRequest $request): RedirectResponse
    {
        $validated_input = $request->validated();

        $validated_input['ad_training_from'] = Carbon::parse($validated_input['ad_training_from']);
        $validated_input['ad_training_to'] = Carbon::parse($validated_input['ad_training_to']);

        if ($validated_input['ad_training_from']->greaterThanOrEqualTo($validated_input['ad_training_to'])) {
            return redirect()->back()->with('error', 'Invalid date range. Start date must be before end date.');
        }

        $path = $this->mediaService->handleMediaFromRequest(
            $request->certificate,
            auth()->user()->applicant_id,
            MediaType::training
        );

        $validated_input['training_period'] = ($validated_input['date_format'] == 'BS')
            ? Carbon::parse($validated_input['ad_training_from'])->diffInMonths(Carbon::parse($validated_input['ad_training_to']))
            : Carbon::parse($validated_input['training_from'])->diffInMonths(Carbon::parse($validated_input['training_to']));

        $training = Training::create($validated_input);

        if ($path) {
            $training->media()->create($path);
        }

        return redirect()->route('training.index')->with('message', 'Training Created Successfully');;
    }

    public function edit(Training $training): View
    {
        $training->load('media');

        return view('user.training.edit', compact('training'));
    }

    public function update(StoreTrainingRequest $request, Training $training): RedirectResponse
    {
        $validated_input = $request->validated();

        $validated_input['ad_training_from'] = Carbon::parse($validated_input['ad_training_from']);
        $validated_input['ad_training_to'] = Carbon::parse($validated_input['ad_training_to']);

        if ($validated_input['ad_training_from']->greaterThanOrEqualTo($validated_input['ad_training_to'])) {
            return redirect()->back()->with('error', 'Invalid date range. Start date must be before end date.');
        }

        $existingCertificate = $training->media()->where(
            'media_type_id',
            MediaType::training
        )->first();

        $certificatePath = $this->mediaService->handleMediaFromRequest(
            $request->certificate,
            auth()->user()->applicant_id,
            MediaType::training,
            $existingCertificate
        );

        $validated_input['training_period'] = ($validated_input['date_format'] == 'BS')
            ? Carbon::parse($validated_input['ad_training_from'])->diffInMonths(Carbon::parse($validated_input['ad_training_to']))
            : Carbon::parse($validated_input['training_from'])->diffInMonths(Carbon::parse($validated_input['training_to']));

        $training->update($validated_input);

        if ($certificatePath) {
            $training->media()->updateOrCreate(['id' => optional($existingCertificate)->id], $certificatePath);
        }

        return redirect()->route(route: 'training.index')
            ->with('message', 'Training updated successfully.');
    }

    public function destroy(Training $training): RedirectResponse
    {
        $training->delete();

        return back();
    }
}
