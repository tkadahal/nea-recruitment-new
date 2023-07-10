@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.tippani.store') }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.tippani.title_singular') }}
        </div>
        <div class="card-body">

            <div class="row g-3">
                <div class="col">
                    <div class="form-group {{ $errors->has('fiscal_year_id') ? 'has-error' : '' }}">
                        <label class="required" for="fiscal_year_id">
                            {{ trans('global.tippani.fields.fiscal_year_id') }}
                        </label>
                        <select name="fiscal_year_id" id="fiscal_year_id" class="form-control select2">
                            @foreach ($fiscalYears as $id => $fiscalYear)
                            <option value="{{ $id }}" {{ (isset($tippani) && $tippani->fiscalYear
                                ? $tippani->fiscalYear->id
                                : old('fiscal_year_id')) == $id
                                ? 'selected'
                                : '' }}>
                                {{ $fiscalYear }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('fiscal_year_id'))
                        <p class="help-block">
                            {{ $errors->first('fiscal_year_id') }}
                        </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.tippani.fields.fiscal_year_id_helper') }}
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                        <label class="required" for="category_id">
                            {{ trans('global.tippani.fields.category_id') }}
                        </label>
                        <select name="category_id" id="category_id" class="form-control select2">
                            @foreach ($categories as $id => $category)
                            <option value="{{ $id }}" {{ (isset($tippani) && $tippani->category
                                ? $tippani->category->id
                                : old('category_id')) == $id
                                ? 'selected'
                                : '' }}>
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
                            {{ trans('global.tippani.fields.category_id_helper') }}
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label class="required" for="title">
                            {{ trans('global.tippani.fields.title') }}
                        </label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', isset($tippani) ? $tippani->title : '') }}">
                        @if ($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.tippani.fields.title_helper') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label class="label" for="description">
                    {{ trans('global.tippani.fields.description') }}
                </label>
                <textarea class="form-control ckeditor" id="description" name="description" rows="3">
                    {{ old('description', isset($tippani) ? $tippani->description : '') }}
                </textarea>
                @if ($errors->has('description'))
                <p class="help-block">
                    {{ $errors->first('description') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.tippani.fields.description_helper') }}
                </p>
            </div>

            <div class="row g-2">
                <div class="col">
                    <div class="form-group {{ $errors->has('mediaType') ? 'has-error' : '' }}">
                        <label class="required" for="mediaType">
                            {{ trans('global.tippani.fields.mediaType') }}
                        </label>
                        <select name="mediaType" id="mediaType" class="form-control select2">
                            @foreach ($mediaTypes as $id => $mediaType)
                            <option value="{{ $id }}" {{ (isset($tippani) && $tippani->mediaType
                                ? $tippani->mediaType->id
                                : old('mediaType_id')) == $id
                                ? 'selected'
                                : '' }}>
                                {{ $mediaType }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('mediaType'))
                        <p class="help-block">
                            {{ $errors->first('mediaType') }}
                        </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.tippani.fields.mediaType_helper') }}
                        </p>
                    </div>
                </div>
                <div class="col">
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
            </div>

        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection