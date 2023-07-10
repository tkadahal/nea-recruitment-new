@extends('user.home')

@section('content')


<style>
    .education-block {
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #e9e9e9;
        border-radius: 5px;
        background-color: #ffffff;
    }
</style>

<div role="tabpanel" class="tab-pane {{ request()->routeIs('education') ? 'active' : '' }}" id="education">

    <div class="card">

        <div class="wizard-box">

            <div class="card-body mb-3 pb-3">
                <a href="{{ route('education.create') }}" class="btn btn-block btn-outline-success">
                    <label>
                        {{ trans('global.add') }} {{ trans('global.education.title_singular') }}
                    </label>
                </a>
            </div>

            <div class="card-body">
                @if(count($educations))
                <div class="card-section">
                    <h3>
                        {{ trans('global.education.title_singular') }}
                    </h3>

                    <div class="p-3">

                        <div class="row">
                            <div class="col">
                                @foreach($educations as $education)
                                <div class="education-block">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-danger">
                                                <b>
                                                    {{ $education->qualification->title }}
                                                </b>
                                            </h6>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <div class="btn-group" role="group" aria-label="education Functions">
                                                <a href="{{ route('education.edit', $education->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                {{ trans('global.education.fields.university_id') }}
                                            </p>
                                            <p class="mt-0">
                                                {{ $education->university->title ?? '' }}
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                {{ trans('global.education.fields.institution') }}
                                            </p>
                                            <p class="mt-0">
                                                {{ $education->institution }}
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                {{ trans('global.education.fields.division_id') }} /
                                                {{ trans('global.education.fields.percentage') }}
                                            </p>
                                            <p class="mt-0">
                                                {{ $education->division->title ?? '' }} /
                                                {{ $education->percentage ?? '' }}
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                {{ trans('global.education.fields.pass_year') }}
                                            </p>
                                            <p class="mt-0">
                                                {{ $education->pass_year }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @foreach($education->media as $mediaItem)
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
                        <a class="btn btn-secondary" href="{{ route('contact') }}">
                            Go Back
                        </a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ route('training.index') }}">
                            Save & Next
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection