@extends('layouts.app')

@section('content')

<style>
    .education-block {
        display: flex;
        width: 100%;
        background-color: #f8fafc;
        border: 1px solid #ced4da;
        padding: 0.75rem 2rem;
        border-radius: 4px;
        margin-bottom: 0.7rem;
    }

    .column {
        flex: 1;
    }

    .form-group h5 {
        margin-top: 0;
        margin-bottom: 10px;
        padding-bottom: 5px;
        /* border-bottom: 1px solid #ccc; */
    }
</style>

<style>
    .media-item {
        display: inline-block;
        margin-right: 10px;
        /* Optional margin between media items */
        text-align: center;
    }

    .media-item i {
        display: block;
        font-size: 48px;
        /* Adjust the font size as needed */
        margin: 10px;
    }

    .media-item img {
        max-width: 100%;
        height: auto;
        /* Maintain the aspect ratio of the image */
        max-height: 150px;
        /* Limit the height of the image */
        margin-top: 10px;
    }
</style>

<div class="card" id="educationDetails" style="background-color: #ffffff">

    <div class="card-body mb-3 pb-3">
        <a href="{{ route('educationDetail.create') }}" class="btn btn-block btn-outline-success">
            <label style="font-size: 18px">
                {{ trans('global.add') }} {{ trans('global.educationInfo.title_singular') }}
            </label>
        </a>
    </div>

    <div class="card-body">
        @if(count($educationDetails))
        <div class="card-section">
            <h3>
                {{ trans('global.educationInfo.title_singular') }}
            </h3>

            <div class="p-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-education">
                        <thead>
                            <tr>
                                <th>
                                    {{ trans('global.educationInfo.fields.qualification_id') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.institution') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.university_id') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.division_id') }} /
                                    {{ trans('global.educationInfo.fields.percentage') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.pass_year') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($educationDetails as $key => $educationDetail)
                            <tr>
                                <td>
                                    {{ $educationDetail->qualification->title ?? '' }}
                                </td>
                                <td>
                                    {{ $educationDetail->institution ?? '' }}
                                </td>
                                <td>
                                    {{ $educationDetail->university->title ?? '' }}
                                </td>
                                <td>
                                    {{ $educationDetail->division->title ?? '' }}
                                    / {{ $educationDetail->percentage ?? '' }}
                                </td>
                                <td>
                                    {{ $educationDetail->pass_year ?? '' }}
                                </td>
                                <td>
                                    @foreach($educationDetail->media as $mediaItem)
                                    @if (Str::startsWith($mediaItem->mime_type, 'image/'))
                                    <img src="{{ $mediaItem->short_url }}" alt="" class="img-fluid"
                                        style="max-width:100%; max-height:150px; margin-top:10px;">
                                    @else
                                    <a target="_blank" href="{{ $mediaItem->short_url }}">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="education Functions">

                                        <a href="{{ route('educationDetail.edit', $educationDetail->id) }}"
                                            class="btn btn-info btn-sm">
                                            {{ trans('global.edit') }}
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- <div class="p-3">
                <div class="row">
                    @foreach($educationDetails as $key => $educationDetail)
                    <div class="education-block">
                        <div class="col-md-6">
                            <div class="form-group">
                                <u>
                                    <h5 class="text-danger">
                                        {{ $educationDetail->qualification->title ?? '' }}
                                        ({{ $educationDetail->pass_year ?? '' }})
                                    </h5>
                                </u>
                                <!-- Information about education -->
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.educationInfo.fields.institution') }} :
                                    </span>
                                    <span class="text">
                                        {{ $educationDetail->institution ?? '' }}
                                    </span>
                                </h5>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.educationInfo.fields.university_id') }} :
                                    </span>
                                    <span class="text">
                                        {{ $educationDetail->university->title ?? '' }}
                                    </span>
                                </h5>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.educationInfo.fields.division_id') }} / {{
                                        trans('global.educationInfo.fields.percentage') }}:
                                    </span>
                                    <span class="text">
                                        {{ $educationDetail->division->title ?? '' }} / {{
                                        $educationDetail->percentage
                                        ?? '' }}
                                    </span>
                                </h5>

                                <!-- Media items -->
                                <div class="row g-2">
                                    @foreach($educationDetail->media as $mediaItem)
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div class="media-item">
                                            <span>{{ $mediaItem->mediaType->title }}</span>
                                            @if (Str::startsWith($mediaItem->mime_type, 'image/'))
                                            <img src="{{ $mediaItem->short_url }}" alt="" class="img-fluid"
                                                style="max-width:100%; max-height:150px; margin-top:10px;">
                                            @else
                                            <a target="_blank" href="{{ $mediaItem->short_url }}">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pull-right">
                                <a href="{{ route('educationDetail.edit', $educationDetail->id) }}"
                                    class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('educationDetail.destroy', $educationDetail->id) }}"
                                    method="POST" style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        {{ trans('global.delete') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}

        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <a class="btn btn-secondary" href="{{ route('contactDetail') }}">
                    Go Back
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('trainingDetail.index') }}">
                    Save & Next
                </a>
            </div>
        </div>
    </div>
</div>
@endsection