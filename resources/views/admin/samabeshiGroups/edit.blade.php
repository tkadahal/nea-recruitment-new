@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.samabeshiGroup.update', $samabeshiGroup) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('put')
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.edit') }} {{ trans('global.samabeshiGroup.title_singular') }}
        </div>
        <div class="card-body">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.samabeshiGroup.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($samabeshiGroup) ? $samabeshiGroup->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.samabeshiGroup.fields.title_helper') }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection