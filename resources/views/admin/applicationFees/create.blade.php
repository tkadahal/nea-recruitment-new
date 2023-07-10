@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.applicationFee.store') }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.applicationFee.title_singular') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.applicationFee.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($applicationFee) ? $applicationFee->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('open') ? 'has-error' : '' }}">
                <label class="required" for="open">
                    {{ trans('global.applicationFee.fields.open') }}
                </label>
                <input type="text" id="open" name="open" class="form-control"
                    value="{{ old('open', isset($applicationFee) ? $applicationFee->open : '') }}">
                @if($errors->has('open'))
                <p class="help-block">
                    {{ $errors->first('open') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.open_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('female') ? 'has-error' : '' }}">
                <label class="required" for="female">
                    {{ trans('global.applicationFee.fields.female') }}
                </label>
                <input type="text" id="female" name="female" class="form-control"
                    value="{{ old('female', isset($applicationFee) ? $applicationFee->female : '') }}">
                @if($errors->has('female'))
                <p class="help-block">
                    {{ $errors->first('female') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.female_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('janajati') ? 'has-error' : '' }}">
                <label class="required" for="janajati">
                    {{ trans('global.applicationFee.fields.janajati') }}
                </label>
                <input type="text" id="janajati" name="janajati" class="form-control"
                    value="{{ old('janajati', isset($applicationFee) ? $applicationFee->janajati : '') }}">
                @if($errors->has('janajati'))
                <p class="help-block">
                    {{ $errors->first('janajati') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.janajati_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('madhesi') ? 'has-error' : '' }}">
                <label class="required" for="madhesi">
                    {{ trans('global.applicationFee.fields.madhesi') }}
                </label>
                <input type="text" id="madhesi" name="madhesi" class="form-control"
                    value="{{ old('madhesi', isset($applicationFee) ? $applicationFee->madhesi : '') }}">
                @if($errors->has('madhesi'))
                <p class="help-block">
                    {{ $errors->first('madhesi') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.madhesi_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('dalit') ? 'has-error' : '' }}">
                <label class="required" for="dalit">
                    {{ trans('global.applicationFee.fields.dalit') }}
                </label>
                <input type="text" id="dalit" name="dalit" class="form-control"
                    value="{{ old('dalit', isset($applicationFee) ? $applicationFee->dalit : '') }}">
                @if($errors->has('dalit'))
                <p class="help-block">
                    {{ $errors->first('dalit') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.dalit_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('disabled') ? 'has-error' : '' }}">
                <label class="required" for="disabled">
                    {{ trans('global.applicationFee.fields.disabled') }}
                </label>
                <input type="text" id="disabled" name="disabled" class="form-control"
                    value="{{ old('disabled', isset($applicationFee) ? $applicationFee->disabled : '') }}">
                @if($errors->has('disabled'))
                <p class="help-block">
                    {{ $errors->first('disabled') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.disabled_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('rural') ? 'has-error' : '' }}">
                <label class="required" for="rural">
                    {{ trans('global.applicationFee.fields.rural') }}
                </label>
                <input type="text" id="rural" name="rural" class="form-control"
                    value="{{ old('rural', isset($applicationFee) ? $applicationFee->rural : '') }}">
                @if($errors->has('rural'))
                <p class="help-block">
                    {{ $errors->first('rural') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.applicationFee.fields.rural_helper') }}
                </p>
            </div>

        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection