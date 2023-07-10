<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreTrainingRequest;
use App\Models\MediaType;
use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class TrainingController extends Controller
{
    public function index(): View
    {
        $trainings = Training::latest()->get();

        foreach ($trainings as $training) {
            $from = Carbon::parse($training->training_from);
            $to = Carbon::parse($training->training_to);
            $duration = $to->diff($from);

            $format = '';

            if ($duration->y > 0) {
                $format .= '%y year, ';
            }

            if ($duration->m > 0) {
                $format .= '%m month, ';
            }

            $format .= '%d days';

            $training->duration = $duration->format($format);
        }

        return view('user.training.index', compact('trainings'));
    }

    public function create(): View
    {
        return view('user.training.create');
    }

    public function store(StoreTrainingRequest $request): RedirectResponse
    {
        $path = $this->mediaService->handleMediaFromRequest($request->certificate, auth()->id(), MediaType::training);

        $training = Training::create($request->validated());

        if ($path) {
            $training->media()->create($path);
        }

        return redirect()->route('training.index');
    }

    public function edit(Training $training): View
    {
        $training->load('media');

        return view('user.training.edit', compact('training'));
    }

    public function update(StoreTrainingRequest $request, Training $training): RedirectResponse
    {
        $existingCertificate = $training->media()->where('media_type_id', MediaType::training)->first();

        $certificatePath = $this->mediaService->handleMediaFromRequest($request->certificate, auth()->id(), MediaType::training, $existingCertificate);

        $training->update($request->validated());

        if ($certificatePath) {
            $training->media()->updateOrCreate(['id' => optional($existingCertificate)->id], $certificatePath);
        }

        return redirect()->route(route: 'training.index')
            ->with('message', 'Training updated successfully.');
    }

    public function destroy(Training $training): RedirectResponse
    {
        abort_if(Gate::denies('training_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $training->delete();

        return back();
    }
}
