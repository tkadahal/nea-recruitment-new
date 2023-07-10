@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.status.update', $status) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('put')
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.status.title_singular') }}
        </div>
        <div class="card-body">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.status.fields.title') }}
                </label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($status) ? $status->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.status.fields.title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('color') ? 'has-error' : '' }}">
                <label class="required" for="color">{{ trans('global.status.fields.color') }}</label>
                <input type="text" id="color" name="color" class="form-control colorpicker"
                    value="{{ old('color', isset($status) ? $status->color : '') }}">
                @if($errors->has('color'))
                <p class="help-block">
                    {{ $errors->first('color') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.status.fields.color_helper') }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css"
    rel="stylesheet">
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js">
</script>
<script>
    $('.colorpicker').colorpicker();
</script>
@endsection