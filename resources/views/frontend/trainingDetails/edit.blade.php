@extends('layouts.app')

@section('content')

<div class="card" id="educationDetails" style="background-color: #ffffff">

    <div class="card-body">

        <form class="form-horizontal" action="{{ route('trainingInfo.update', $trainingInfo) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card-section">
                <h3>
                    {{ trans('global.trainingInfo.title_singular') }}
                </h3>

                <div class="p3">

                    <div class="row g-3 m-3">

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('training_institute') ? 'has-error' : '' }}">
                                <label class="required" for="training_institute">
                                    {{ trans('global.trainingInfo.fields.training_institute') }}
                                </label>
                                <input type="text" id="training_institute" name="training_institute"
                                    class="form-control"
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

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                                <label class="required" for="percentage">
                                    {{ trans('global.trainingInfo.fields.percentage') }}
                                </label>
                                <input type="number" step="0.01" min="0.00" max="99.99" id="percentage"
                                    name="percentage" class="form-control"
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

                        <div class="col-md-4">
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
    </div>
</div>
@endsection