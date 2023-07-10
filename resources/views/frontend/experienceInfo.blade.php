@extends('layouts.app')

@section('content')

<div class="card" id="educationDetails" style="background-color: #ffffff">

    <div class="card-header" style="background-color: #ffffff"><i class="fa fa-align-justify"></i>

        <a href="" class="btn btn-block btn-outline-success" style="width: 20%; float: right;" id="showEducationForm">
            {{ trans('global.add') }} {{ trans('global.experienceInfo.title_singular') }}
        </a>

    </div>

    <form id="educationForm" class="form-horizontal" action="{{ route('experienceInfo.store') }}" method="post"
        enctype="multipart/form-data" style="display: none">
        @csrf
        <div class="card-section">
            <div class="p3">
                <div class="row g-4 m-3">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('office') ? 'has-error' : '' }}">
                            <label class="required" for="office">
                                {{ trans('global.experienceInfo.fields.office') }}
                            </label>
                            <input type="text" id="office" name="office" class="form-control"
                                value="{{ old('office', isset($experienceInfo) ? $experienceInfo->office : '') }}">
                            @if($errors->has('office'))
                            <p class="help-block">
                                {{ $errors->first('office') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.office_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('post') ? 'has-error' : '' }}">
                            <label class="required" for="post">
                                {{ trans('global.experienceInfo.fields.post') }}
                            </label>
                            <input type="text" id="post" name="post" class="form-control"
                                value="{{ old('post', isset($experienceInfo) ? $experienceInfo->post : '') }}">
                            @if($errors->has('post'))
                            <p class="help-block">
                                {{ $errors->first('post') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.post_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                            <label class="required" for="level">
                                {{ trans('global.experienceInfo.fields.level') }}
                            </label>
                            <input type="text" id="level" name="level" class="form-control"
                                value="{{ old('level', isset($experienceInfo) ? $experienceInfo->level : '') }}">
                            @if($errors->has('level'))
                            <p class="help-block">
                                {{ $errors->first('level') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.level_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('recruitment_type') ? 'has-error' : '' }}">
                            <label class="required" for="recruitment_type">
                                {{ trans('global.experienceInfo.fields.recruitment_type') }}
                            </label>
                            <input type="text" id="recruitment_type" name="recruitment_type" class="form-control"
                                value="{{ old('recruitment_type', isset($experienceInfo) ? $experienceInfo->recruitment_type : '') }}">
                            @if($errors->has('recruitment_type'))
                            <p class="help-block">
                                {{ $errors->first('recruitment_type') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.recruitment_type_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
                            <label class="required" for="start_date">
                                {{ trans('global.experienceInfo.fields.start_date') }}
                            </label>
                            <input type="text" id="start_date" name="start_date" class="form-control"
                                value="{{ old('start_date', isset($experienceInfo) ? $experienceInfo->start_date : '') }}">
                            @if($errors->has('start_date'))
                            <p class="help-block">
                                {{ $errors->first('start_date') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.start_date_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
                            <label class="required" for="end_date">
                                {{ trans('global.experienceInfo.fields.end_date') }}
                            </label>
                            <input type="text" id="end_date" name="end_date" class="form-control"
                                value="{{ old('end_date', isset($experienceInfo) ? $experienceInfo->end_date : '') }}">
                            @if($errors->has('end_date'))
                            <p class="help-block">
                                {{ $errors->first('end_date') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.end_date_helper') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </div>
    </form>

    <div class="card-body">
        <div class="card-section">
            <h3>
                {{ trans('global.experienceInfo.title_singular') }}
            </h3>

            <div class="p-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-category">
                        <thead>
                            <tr>
                                <th width="10">
                                    #
                                </th>
                                <th>
                                    {{ trans('global.experienceInfo.fields.office') }}
                                </th>
                                <th>
                                    {{ trans('global.experienceInfo.fields.post') }}
                                </th>
                                <th>
                                    {{ trans('global.experienceInfo.fields.level') }}
                                </th>
                                <th>
                                    {{ trans('global.experienceInfo.fields.recruitment_type') }}
                                </th>
                                <th>
                                    {{ trans('global.experienceInfo.fields.start_date') }}
                                </th>
                                <th>
                                    {{ trans('global.experienceInfo.fields.end_date') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($experienceInfos as $key => $experienceInfo)
                            <tr data-entry-id="{{ $experienceInfo->id }}">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $experienceInfo->office ?? '' }}
                                </td>
                                <td>
                                    {{ $experienceInfo->post ?? '' }}
                                </td>
                                <td>
                                    {{ $experienceInfo->level ?? '' }}
                                </td>
                                <td>
                                    {{ $experienceInfo->recruitment_type ?? '' }}
                                </td>
                                <td>
                                    {{ $experienceInfo->start_date ?? '' }}
                                </td>
                                <td>
                                    {{ $experienceInfo->end_date ?? '' }}
                                </td>
                                <td>
                                    {{-- <div class="btn-group" role="group" aria-label="category Functions">

                                        @can('category_show')
                                        <a href="{{ route('admin.category.show', $category) }}"
                                            class="btn btn-primary btn-sm">
                                            {{ trans('global.show') }}
                                        </a>
                                        @endcan

                                        @can('category_edit')
                                        <a href="{{ route('admin.category.edit', $category) }}"
                                            class="btn btn-info btn-sm">
                                            {{ trans('global.edit') }}
                                        </a>
                                        @endcan

                                        @can('category_delete')
                                        <form action="{{ route('admin.category.destroy', $category) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                {{ trans('global.delete') }}
                                            </button>
                                        </form>
                                        @endcan

                                    </div> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('#showEducationForm').click(function(event) {
        event.preventDefault();
        $('#educationForm').show();
    });
</script>
@endsection