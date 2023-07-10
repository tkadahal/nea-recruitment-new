@extends('user.home')

@section('content')

<div class="card" id="educationDetails" style="background-color: #ffffff">

    <div class="card-body">

        <form class="form-horizontal" action="{{ route('trainingDetail.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="card-section">
                <h3>
                    {{ trans('global.trainingInfo.title_singular') }}
                </h3>

                <div class="p3">

                    <div class="row g-3 m-3">

                        <div class="col-md-6">
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

                        <div class="col-md-6">
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
                            <div class="form-group {{ $errors->has('training_from') ? 'has-error' : '' }}">
                                <label class="required" for="training_from">
                                    {{ trans('global.trainingInfo.fields.training_from') }}
                                </label>
                                <input type="text" id="training_from" name="training_from" class="form-control"
                                    value="{{ old('training_from', isset($trainingInfo) ? $trainingInfo->training_from : '') }}">
                                @if($errors->has('training_from'))
                                <p class="help-block">
                                    {{ $errors->first('training_from') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.trainingInfo.fields.training_from_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('training_to') ? 'has-error' : '' }}">
                                <label class="required" for="training_to">
                                    {{ trans('global.trainingInfo.fields.training_to') }}
                                </label>
                                <input type="text" id="training_to" name="training_to" class="form-control"
                                    value="{{ old('training_to', isset($trainingInfo) ? $trainingInfo->training_to : '') }}">
                                @if($errors->has('training_to'))
                                <p class="help-block">
                                    {{ $errors->first('training_to') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.trainingInfo.fields.training_to_helper') }}
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
                            <div class="form-group {{ $errors->has('certificate') ? 'has-error' : '' }}">
                                <label class="required" for="certificate">
                                    {{ trans('global.trainingInfo.fields.certificate') }}
                                </label>
                                <input type="file" class="form-control" id="certificate" name="certificate"
                                    value="{{ old('certificate', isset($educationInfo) ? $educationInfo->certificate : '') }}"
                                    style="display: block; border-color:#ccc">
                                @if ($errors->has('certificate'))
                                <p class="help-block">
                                    {{ $errors->first('certificate') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.trainingInfo.fields.certificate_helper') }}
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