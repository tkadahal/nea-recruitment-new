@extends('layouts.app')

@section('content')

    <div class="wizard-box {{ request()->routeIs('experience') ? 'active' : '' }}" id="experience">

        <div class="card-body mb-3 pb-3">
            <a href="{{ route('experience.create') }}" class="btn btn-block btn-outline-success">
                <label>
                    {{ trans('global.add') }} {{ trans('global.experience.title_singular') }}
                </label>
            </a>
        </div>

        <div class="card-body">
            @if (count($experiences))
                <div class="col d-flex justify-content-end">
                    <span class="text-primary">
                        {{ trans('global.experience.fields.total_duration') }} :
                    </span>
                    {{ $totalDurationFormatted }}
                </div>
                <div class="card-section">
                    <h3>
                        {{ trans('global.experience.title_singular') }}
                    </h3>

                    <div class="p-3">

                        <div class="row">
                            <div class="col">
                                @foreach ($experiences as $experience)
                                    <div class="experience-block">
                                        @if ($experience->formattedExperiencePeriod)
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <span class="text-success font-weight-bold">
                                                        {{ trans('global.experience.fields.duration') }}:
                                                        <span class="text-lg">
                                                            {{ $experience->formattedExperiencePeriod }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="text-danger">
                                                    <b>
                                                        {{ $experience->post }}
                                                    </b>
                                                </h6>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="btn-group" role="group" aria-label="experience Functions">
                                                    <a href="{{ route('experience.edit', $experience->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.recruitment_type_id') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->recruitmentType->title ?? '' }}
                                                </p>
                                            </div>

                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.level') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->level }}
                                                </p>
                                            </div>

                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.start_date') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->start_date ?? '' }}
                                                </p>
                                            </div>

                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.end_date') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->end_date ?? '' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($experience->media as $mediaItem)
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
                    <a class="btn btn-secondary" href="{{ route('training.index') }}">
                        Go Back
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('upload') }}">
                        Save & Next
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        .experience-block {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            background-color: #ffffff;
        }
    </style>
@endsection
