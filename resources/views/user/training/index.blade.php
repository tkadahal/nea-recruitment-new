@extends('layouts.app')

@section('content')

    <div role="tabpanel" class="tab-pane {{ request()->routeIs('training') ? 'active' : '' }}" id="training">

        <div class="card">

            <div class="wizard-box">

                <div class="card-body mb-3 pb-3">
                    <a href="{{ route('training.create') }}" class="btn btn-block btn-outline-success">
                        <label>
                            {{ trans('global.add') }} {{ trans('global.training.title_singular') }}
                        </label>
                    </a>
                </div>

                <div class="card-body">
                    @if (count($trainings))
                        <div class="col d-flex justify-content-end">
                            <span class="text-primary">
                                {{ trans('global.training.fields.total_duration') }} :
                            </span>
                            {{ $totalDurationFormatted }}
                        </div>
                        <div class="card-section">
                            <h3>
                                {{ trans('global.training.title_singular') }}
                            </h3>

                            <div class="p-3">

                                <div class="row">
                                    <div class="col">
                                        @foreach ($trainings as $training)
                                            <div class="training-block">
                                                @if ($training->formattedTrainingPeriod)
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <span class="text-success font-weight-bold">
                                                                Duration: <span
                                                                    class="text-lg">{{ $training->formattedTrainingPeriod }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="text-danger">
                                                            <b>
                                                                {{ $training->subject }}
                                                            </b>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6 d-flex justify-content-end">
                                                        <div class="btn-group" role="group"
                                                            aria-label="training Functions">
                                                            <a href="{{ route('training.edit', $training->id) }}"
                                                                class="btn btn-info btn-sm">
                                                                {{ trans('global.edit') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1"
                                                            style="font-weight: bold; text-decoration: underline;">
                                                            {{ trans('global.training.fields.training_institute') }}
                                                        </p>
                                                        <p class="mt-0">
                                                            {{ $training->training_institute ?? '' }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1"
                                                            style="font-weight: bold; text-decoration: underline;">
                                                            {{ trans('global.training.fields.training_from') }}
                                                        </p>
                                                        <p class="mt-0">
                                                            {{ $training->training_from ?? '' }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1"
                                                            style="font-weight: bold; text-decoration: underline;">
                                                            {{ trans('global.training.fields.training_to') }}
                                                        </p>
                                                        <p class="mt-0">
                                                            {{ $training->training_to ?? '' }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1"
                                                            style="font-weight: bold; text-decoration: underline;">
                                                            {{ trans('global.training.fields.percentage') }}
                                                        </p>
                                                        <p class="mt-0">
                                                            {{ $training->percentage ?? '' }}
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    @foreach ($training->media as $mediaItem)
                                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                                            <div class="media-item">
                                                                <a target="_blank" href="{{ $mediaItem->short_url }}">
                                                                    <i class="fas fa-file-pdf fa-3x text-primary"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <p>{{ $mediaItem->mediaType->title }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                        </div>
                    @endif
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-secondary" href="{{ route('education.index') }}">
                                Go Back
                            </a>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ route('experience.index') }}">
                                Save & Next
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .training-block {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            background-color: #ffffff;
        }
    </style>
@endsection
