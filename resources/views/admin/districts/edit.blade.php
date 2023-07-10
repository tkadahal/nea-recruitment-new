@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.district.update', $district) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('put')
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.edit') }} {{ trans('global.district.title_singular') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
                <label class="required" for="province_id">
                    {{ trans('global.district.fields.province_id') }}
                </label>
                <select name="province_id" id="province_id" class="form-control select2">
                    @foreach ($provinces as $id => $province)
                    <option value="{{ $id }}" {{ (isset($district) && $district->province
                        ? $district->province->id
                        : old('province_id')) == $id
                        ? 'selected'
                        : '' }}>
                        {{ $province }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('province_id'))
                <p class="help-block">
                    {{ $errors->first('province_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.district.fields.province_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.district.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($district) ? $district->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.district.fields.title_helper') }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection