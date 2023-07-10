@extends('layouts.app')

@section('content')

<div class="card" id="educationDetails" style="background-color: #ffffff">

    <div class="card-header" style="background-color: #ffffff"><i class="fa fa-align-justify"></i>

        <a href="" class="btn btn-block btn-outline-success" style="width: 20%; float: right;" id="showEducationForm">
            {{ trans('global.add') }} {{ trans('global.trainingInfo.title_singular') }}
        </a>

    </div>

    <form id="educationForm" class="form-horizontal" action="{{ route('trainingInfo.store') }}" method="post"
        enctype="multipart/form-data" style="display: none">
        @csrf
        <div class="card-section">
            <div class="p3">
                <div class="row g-4 m-3">

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('training_institute') ? 'has-error' : '' }}">
                            <label class="required" for="training_institute">
                                {{ trans('global.trainingInfo.fields.training_institute') }}
                            </label>
                            <input type="text" id="training_institute" name="training_institute" class="form-control"
                                value="{{ old('training_institute', isset($trainingInfo) ? $trainingInfo->training_institute : '') }}">
                            @if($errors->has('training_institute'))
                            <p class="help-block">
                                {{ $errors->first('training_institute') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.trainingInfo.fields.training_institute_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                            <label class="required" for="subject">
                                {{ trans('global.trainingInfo.fields.subject') }}
                            </label>
                            <input type="text" id="subject" name="subject" class="form-control"
                                value="{{ old('subject', isset($trainingInfo) ? $trainingInfo->subject : '') }}">
                            @if($errors->has('subject'))
                            <p class="help-block">
                                {{ $errors->first('subject') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.trainingInfo.fields.subject_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('training_year') ? 'has-error' : '' }}">
                            <label class="required" for="training_year">
                                {{ trans('global.trainingInfo.fields.training_year') }}
                            </label>
                            <input type="text" id="training_year" name="training_year" class="form-control"
                                value="{{ old('training_year', isset($trainingInfo) ? $trainingInfo->training_year : '') }}">
                            @if($errors->has('training_year'))
                            <p class="help-block">
                                {{ $errors->first('training_year') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.trainingInfo.fields.training_year_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                            <label class="required" for="percentage">
                                {{ trans('global.trainingInfo.fields.percentage') }}
                            </label>
                            <input type="text" id="percentage" name="percentage" class="form-control"
                                value="{{ old('percentage', isset($trainingInfo) ? $trainingInfo->percentage : '') }}">
                            @if($errors->has('percentage'))
                            <p class="help-block">
                                {{ $errors->first('percentage') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.trainingInfo.fields.percentage_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('grade') ? 'has-error' : '' }}">
                            <label class="required" for="grade">
                                {{ trans('global.trainingInfo.fields.grade') }}
                            </label>
                            <input type="text" id="grade" name="grade" class="form-control"
                                value="{{ old('grade', isset($trainingInfo) ? $trainingInfo->grade : '') }}">
                            @if($errors->has('grade'))
                            <p class="help-block">
                                {{ $errors->first('grade') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.trainingInfo.fields.grade_helper') }}
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
                Training Information
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
                                    {{ trans('global.trainingInfo.fields.training_institute') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.subject') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.percentage') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.grade') }}
                                </th>
                                <th>
                                    {{ trans('global.trainingInfo.fields.training_year') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trainingInfos as $key => $trainingInfo)
                            <tr data-entry-id="{{ $trainingInfo->id }}">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $trainingInfo->training_institute ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingInfo->subject ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingInfo->percentage ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingInfo->grade ?? '' }}
                                </td>
                                <td>
                                    {{ $trainingInfo->training_year ?? '' }}
                                </td>
                                <td>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- <div class="p3">
                <div class="row g-3 m-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label required">
                            {{ trans('global.personalInfo.fields.name') }}
                        </label>
                        <input type="email" class="form-control required" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">
                            {{ trans('global.personalInfo.fields.name_np') }}
                        </label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">
                            {{ trans('global.personalInfo.fields.mobile_number') }}
                        </label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">
                            {{ trans('global.personalInfo.fields.email') }}
                        </label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">
                            {{ trans('global.personalInfo.fields.dob_np') }}
                        </label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">
                            {{ trans('global.personalInfo.fields.dob_en') }}
                        </label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">
                            {{ trans('global.personalInfo.fields.gender') }}
                        </label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress2" class="form-label">
                            {{ trans('global.personalInfo.fields.citizenship_number') }}
                        </label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress2" class="form-label">
                            {{ trans('global.personalInfo.fields.citizenship_district') }}
                        </label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress2" class="form-label">
                            {{ trans('global.personalInfo.fields.citizenship_date') }}
                        </label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                </div>
            </div> --}}
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