@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.tippani.action', $tippaniId) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.tippani.fields.comment') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('status_id') ? 'has-error' : '' }}">
                <label class="required" for="status_id">
                    {{ trans('global.tippani.fields.status') }}
                </label>
                <select name="status_id" id="status_id" class="form-control select2">
                    @foreach($statuses as $id => $title)
                    <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
                @if ($errors->has('status_id'))
                <p class="help-block">
                    {{ $errors->first('status_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.tippani.fields.status_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                <label class="label" for="comment">
                    {{ trans('global.tippani.fields.comment') }}
                </label>
                <textarea class="form-control ckeditor" id="comment" name="comment" rows="3">
                    {{ old('comment') }}
                </textarea>
                @if ($errors->has('comment'))
                <p class="help-block">
                    {{ $errors->first('comment') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.tippani.fields.comment_helper') }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection