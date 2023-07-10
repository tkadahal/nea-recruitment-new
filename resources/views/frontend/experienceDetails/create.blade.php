@extends('layouts.app')

@section('content')

<div class="card" id="experienceDetails" style="background-color: #ffffff">

    <div class="card-body">

        <form class="form-horizontal" action="{{ route('experienceDetail.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="card-section">
                <h3>
                    {{ trans('global.experienceInfo.title_singular') }}
                </h3>

                <div class="p3">

                    <div class="row g-3 m-3">

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

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('recruitment_type_id') ? 'has-error' : '' }}">
                                <label class="required" for="recruitment_type_id">
                                    {{ trans('global.experienceInfo.fields.recruitment_type_id') }}
                                </label>
                                <select name="recruitment_type_id" id="recruitment_type_id"
                                    class="form-control select2">
                                    @foreach ($recruitmentTypes as $id => $recruitmentType)
                                    <option value="{{ $id }}" {{ (isset($experienceInfo) && $experienceInfo->
                                        recruitmentType
                                        ? $experienceInfo->recruitmentType->id
                                        : old('recruitment_type_id')) == $id
                                        ? 'selected'
                                        : '' }}>
                                        {{ $recruitmentType }}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has('recruitment_type_id'))
                                <p class="help-block">
                                    {{ $errors->first('recruitment_type_id') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experienceInfo.fields.recruitment_type_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
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

                        <div class="col-md-4">
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

                        <div class="form-group {{ $errors->has('job_description') ? 'has-error' : '' }}">
                            <label class="label" for="job_description">
                                {{ trans('global.experienceInfo.fields.job_description') }}
                            </label>
                            <textarea class="form-control" id="job_description" name="job_description" rows="3">
                                {{ old('job_description', isset($experienceInfo) ? $experienceInfo->job_description : '') }}
                            </textarea>
                            @if ($errors->has('job_description'))
                            <p class="help-block">
                                {{ $errors->first('job_description') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.experienceInfo.fields.job_description_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection