@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.level.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.level.title_singular') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
                <label class="required" for="group_id">
                    {{ trans('global.level.fields.group_id') }}
                </label>
                <select name="group_id" id="group_id" class="form-control select2">
                    @foreach ($groups as $id => $group)
                    <option value="{{ $id }}" {{ (isset($level) && $level->group
                        ? $level->group->id
                        : old('group_id')) == $id
                        ? 'selected'
                        : '' }}>
                        {{ $group }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('group_id'))
                <p class="help-block">
                    {{ $errors->first('group_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.level.fields.group_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.level.fields.title') }}
                </label>
                <input type="number" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($level) ? $level->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.level.fields.title_helper') }}
                </p>
            </div>

        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection