@extends('layouts.admin')

@section('content')
    <div class="card">
        <form class="form-horizontal" action="{{ route('admin.support.update', $support) }}" method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('put')
            <div class="card-header">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                {{ trans('global.edit') }} {{ trans('global.support.title_singular') }}
            </div>
            <div class="card-body">
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label class="required" for="title">
                        {{ trans('global.support.fields.title') }}
                    </label>
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{ old('title', isset($support) ? $support->title : '') }}">
                    @if ($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.support.fields.title_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label class="label" for="description">
                        {{ trans('global.support.fields.description') }}
                    </label>
                    <textarea class="form-control ckeditor" id="description" name="description" rows="3">
                        {{ old('description', isset($support) ? $support->description : '') }}
                    </textarea>
                    @if ($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.support.fields.description_helper') }}
                    </p>
                </div>
            </div>

            <div class="card-footer">
                <input class=" btn btn-danger" type="submit">
            </div>

        </form>
    </div>
@endsection
