@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.tippani.postSupportives', $mediaId) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.tippani.title_singular') }} {{ trans('global.supportives') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                <label class="required" for="document">
                    {{ trans('global.tippani.fields.document') }}
                </label>
                <input type="file" class="btn btn-default" id="document[]" name="document[]" multiple
                    value="{{ old('document', isset($tippani) ? $tippani->document : '') }}"
                    style="display: block; border-color:#ccc">
                @if ($errors->has('document'))
                <p class="help-block">
                    {{ $errors->first('document') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.tippani.fields.document_helper') }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection