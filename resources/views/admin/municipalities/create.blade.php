@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.municipality.store') }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.municipality.title_singular') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('district_id') ? 'has-error' : '' }}">
                <label class="required" for="district_id">
                    {{ trans('global.municipality.fields.district_id') }}
                </label>
                <select name="district_id" id="district_id" class="form-control select2">
                    @foreach ($districts as $id => $district)
                    <option value="{{ $id }}" {{ (isset($municipality) && $municipality->district
                        ? $municipality->district->id
                        : old('district_id')) == $id
                        ? 'selected'
                        : '' }}>
                        {{ $district }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('district_id'))
                <p class="help-block">
                    {{ $errors->first('district_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.municipality.fields.district_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.municipality.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($municipality) ? $municipality->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.municipality.fields.title_helper') }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection