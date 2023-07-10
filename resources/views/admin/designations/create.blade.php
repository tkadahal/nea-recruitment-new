@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.designation.store') }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.designation.title_singular') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('gender_id') ? 'has-error' : '' }}">
                <label class="required" for="gender_id">
                    {{ trans('global.designation.fields.gender_id') }}
                </label>
                <select name="gender_id" id="gender_id" class="form-control select2">
                    @foreach ($genders as $id => $gender)
                    <option value="{{ $id }}" {{ (isset($designation) && $designation->gender
                        ? $designation->gender->id
                        : old('gender_id')) == $id
                        ? 'selected'
                        : '' }}>
                        {{ $gender }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('gender_id'))
                <p class="help-block">
                    {{ $errors->first('gender_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.designation.fields.gender_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.designation.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($designation) ? $designation->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.designation.fields.title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('minimum_age') ? 'has-error' : '' }}">
                <label class="required" for="minimum_age">
                    {{ trans('global.designation.fields.minimum_age') }}
                </label>
                <input type="text" id="minimum_age" name="minimum_age" class="form-control"
                    value="{{ old('minimum_age', isset($designation) ? $designation->minimum_age : '') }}">
                @if($errors->has('minimum_age'))
                <p class="help-block">
                    {{ $errors->first('minimum_age') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.designation.fields.minimum_age_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('maximum_age') ? 'has-error' : '' }}">
                <label class="required" for="maximum_age">
                    {{ trans('global.designation.fields.maximum_age') }}
                </label>
                <input type="text" id="maximum_age" name="maximum_age" class="form-control"
                    value="{{ old('maximum_age', isset($designation) ? $designation->maximum_age : '') }}">
                @if($errors->has('maximum_age'))
                <p class="help-block">
                    {{ $errors->first('maximum_age') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.designation.fields.maximum_age_helper') }}
                </p>
            </div>

        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection