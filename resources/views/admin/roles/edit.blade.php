@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.role.update', $role) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('put')
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.edit') }} {{ trans('global.role.title_singular') }}
        </div>

        <div class="card-body">

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.role.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($role) ? $role->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.role.fields.title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                <label class="required" for="permissions">
                    {{ trans('global.role.fields.permissions') }}
                    <span class="btn btn-info btn-xs select-all">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all">Deselect all</span>
                </label>
                <select name="permissions[]" id="permissions"
                    class="form-control select2 {{ $errors->has('permissions') ? 'is-invalid' : '' }}" multiple
                    required>
                    @foreach($permissions as $id => $permissions)
                    <option value=" {{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->
                        permissions->contains($id)) ? 'selected' : '' }}>
                        {{ $permissions }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('permissions'))
                <p class="help-block">
                    {{ $errors->first('permissions') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.role.fields.permissions_helper') }}
                </p>
            </div>

        </div>
        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection