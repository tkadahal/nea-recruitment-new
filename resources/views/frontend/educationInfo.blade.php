@extends('layouts.app')

@section('content')

<div class="card" id="educationDetails" style="background-color: #ffffff">

    <div class="card-body mb-3 pb-3">
        <a href="" class="btn btn-block btn-outline-success" style="width: 20%;" id="showEducationForm">
            {{ trans('global.add') }} {{ trans('global.educationInfo.title_singular') }}
        </a>
    </div>

    <div id="educationForm" class="card-body">
        <form class="form-horizontal" action="{{ route('educationInfo.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card-section">
                <div class="p3">

                    <div class="row g-3 m-3">

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('qualification_id') ? 'has-error' : '' }}">
                                <label class="required" for="qualification_id">
                                    {{ trans('global.educationInfo.fields.qualification_id') }}
                                </label>
                                <select name="qualification_id" id="qualification_id" class="form-control select2">
                                    @foreach ($qualifications as $id => $qualification)
                                    <option value="{{ $id }}" {{ (isset($educationInfo) && $educationInfo->qualification
                                        ? $educationInfo->qualification->id
                                        : old('qualification_id')) == $id
                                        ? 'selected'
                                        : '' }}>
                                        {{ $qualification }}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has('qualification_id'))
                                <p class="help-block">
                                    {{ $errors->first('qualification_id') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.educationInfo.fields.qualification_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('institution') ? 'has-error' : '' }}">
                                <label class="required" for="institution">
                                    {{ trans('global.educationInfo.fields.institution') }}
                                </label>
                                <input type="text" id="institution" name="institution" class="form-control"
                                    value="{{ old('institution', isset($contactInfo) ? $contactInfo->institution : '') }}">
                                @if($errors->has('institution'))
                                <p class="help-block">
                                    {{ $errors->first('institution') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.educationInfo.fields.institution_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('university_id') ? 'has-error' : '' }}">
                                <label class="required" for="university_id">
                                    {{ trans('global.educationInfo.fields.university_id') }}
                                </label>
                                <select name="university_id" id="university_id" class="form-control select2">
                                    @foreach ($universities as $id => $university)
                                    <option value="{{ $id }}" {{ (isset($educationInfo) && $educationInfo->university
                                        ? $educationInfo->university->id
                                        : old('university_id')) == $id
                                        ? 'selected'
                                        : '' }}>
                                        {{ $university }}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has('university_id'))
                                <p class="help-block">
                                    {{ $errors->first('university_id') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.educationInfo.fields.university_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('division_id') ? 'has-error' : '' }}">
                                <label class="required" for="division_id">
                                    {{ trans('global.educationInfo.fields.division_id') }}
                                </label>
                                <select name="division_id" id="division_id" class="form-control select2">
                                    @foreach ($divisions as $id => $division)
                                    <option value="{{ $id }}" {{ (isset($educationInfo) && $educationInfo->division
                                        ? $educationInfo->division->id
                                        : old('division_id')) == $id
                                        ? 'selected'
                                        : '' }}>
                                        {{ $division }}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has('division_id'))
                                <p class="help-block">
                                    {{ $errors->first('division_id') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.educationInfo.fields.division_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                                <label class="required" for="percentage">
                                    {{ trans('global.educationInfo.fields.percentage') }}
                                </label>
                                <input type="number" step="0.01" min="0.00" max="99.99" id="percentage"
                                    name="percentage" class="form-control"
                                    value="{{ old('percentage', isset($contactInfo) ? $contactInfo->percentage : '') }}">
                                @if($errors->has('percentage'))
                                <p class="help-block">
                                    {{ $errors->first('percentage') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.educationInfo.fields.percentage_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('pass_year') ? 'has-error' : '' }}">
                                <label class="required" for="pass_year">
                                    {{ trans('global.educationInfo.fields.pass_year') }}
                                </label>
                                <input type="number" maxlength="4" pattern="[0-9]{4}" id="pass_year" name="pass_year"
                                    class="form-control"
                                    value="{{ old('pass_year', isset($contactInfo) ? $contactInfo->pass_year : '') }}">
                                @if($errors->has('pass_year'))
                                <p class="help-block">
                                    {{ $errors->first('pass_year') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.educationInfo.fields.pass_year_helper') }}
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
    </div>

    <div class="card-body">
        <div class="card-section">
            <h3>
                {{ trans('global.educationInfo.title_singular') }}
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
                                    {{ trans('global.educationInfo.fields.institution') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.faculty') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.education_board') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.percentage') }}
                                </th>
                                <th>
                                    {{ trans('global.educationInfo.fields.grade') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($educationInfos as $key => $education)
                            <tr data-entry-id="{{ $education->id }}">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $education->institution ?? '' }}
                                </td>
                                <td>
                                    {{ $education->institution ?? '' }}
                                </td>
                                <td>
                                    {{ $education->institution ?? '' }}
                                </td>
                                <td>
                                    {{ $education->institution ?? '' }}
                                </td>
                                <td>
                                    {{ $education->institution ?? '' }}
                                </td>
                                <td>

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