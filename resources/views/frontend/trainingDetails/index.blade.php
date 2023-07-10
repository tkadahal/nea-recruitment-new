@extends('layouts.app')

@section('content')

<style>
    .training-block {
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

<div class="card" id="trainingDetails" style="background-color: #ffffff">

    <div class="card-body mb-3 pb-3">
        <a href="{{ route('trainingDetail.create') }}" class="btn btn-block btn-outline-success">
            <label style="font-size: 18px">
                {{ trans('global.add') }} {{ trans('global.trainingInfo.title_singular') }}
            </label>
        </a>
    </div>

    <div class="card-body">
        @if(count($trainingDetails))
        <div class="card-section">
            <h3>
                {{ trans('global.trainingInfo.title_singular') }}
            </h3>

            <div class="p-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-education">
                        <thead>
                            <tr>
                                <th>
                                    {{ trans('global.trainingInfo.fields.subject') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.training_institute') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.training_from') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.training_to') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.percentage') }}
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
                            @foreach($trainingDetails as $key => $trainingDetail)
                            <tr>
                                <td>
                                    {{ $trainingDetail->subject ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingDetail->training_institute ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingDetail->training_from ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingDetail->training_to ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingDetail->percentage ?? '' }}
                                </td>
                                <td>
                                    @foreach($trainingDetail->media as $mediaItem)
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

                                        <a href="{{ route('trainingDetail.edit', $trainingDetail->id) }}"
                                            class="btn btn-info btn-sm">
                                            {{ trans('global.edit') }}
                                        </a>

                                        {{-- @can('category_delete')
                                        <form action="{{ route('admin.category.destroy', $category) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                {{ trans('global.delete') }}
                                            </button>
                                        </form>
                                        @endcan --}}

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <a class="btn btn-secondary" href="{{ route('educationDetail.index') }}">
                    Go Back
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('experienceDetail.index') }}">
                    Save & Next
                </a>
            </div>
        </div>
    </div>
</div>
@endsection