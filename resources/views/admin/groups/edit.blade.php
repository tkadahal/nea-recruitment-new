@extends('layouts.admin')

@section('content')
    <div class="card">
        <form class="form-horizontal" action="{{ route('admin.group.update', $group) }}" method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('put')
            <div class="card-header">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                {{ trans('global.edit') }} {{ trans('global.group.title_singular') }}
            </div>
            <div class="card-body">

                <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                    <label class="required" for="category_id">
                        {{ trans('global.group.fields.category_id') }}
                    </label>
                    <select name="category_id" id="category_id" class="form-control select2">
                        @foreach ($categories as $id => $category)
                            <option value="{{ $id }}"
                                {{ (isset($group) ? $group->category->id : old('category_id')) == $id ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('category_id'))
                        <p class="help-block">
                            {{ $errors->first('category_id') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.group.fields.category_id_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label class="required" for="title">
                        {{ trans('global.group.fields.title') }}
                    </label>
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{ old('title', isset($group) ? $group->title : '') }}">
                    @if ($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.group.fields.title_helper') }}
                    </p>
                </div>
            </div>

            <div class="card-footer">
                <input class=" btn btn-danger" type="submit">
            </div>

        </form>
    </div>
@endsection
