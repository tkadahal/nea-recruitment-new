@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.tippani.update', $tippani) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('put')
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

            <div class="row">
                <div class="col">
                    <div class="form-group {{ $errors->has('mediaType') ? 'has-error' : '' }}">
                        <label class="required" for="mediaType">
                            {{ trans('global.tippani.fields.mediaType') }}
                        </label>
                        <select name="mediaType" id="mediaType" class="form-control select2">
                            @foreach ($mediaTypes as $id => $mediaType)
                            <option value="{{ $id }}" {{ (isset($tippani) && $tippani->mediaType
                                ? $tippani->mediaType->first()->id
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

            @if(count($tippani->media))
            {{ trans('global.existing_documents') }} :
            @foreach($tippani->media as $mediaItem)
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        style="border: 1px dashed #ccc;">
                        <span>
                            {{ $loop->iteration }}.
                            {!! $mediaItem !!} ({{ $mediaItem->mediaType->title }})
                        </span>
                        @can('tippaniMedia_delete')
                        <span>
                            <button type="button" class="btn btn-info btn-sm" id="modal-trigger"
                                data-model-id="{{ $tippani->id }}" data-media-id="{{ $mediaItem->id }}"
                                data-route="{{ route('admin.tippani.editMedia') }}" data-toggle="modal"
                                data-target="#edit-modal">
                                {{ trans('global.edit') }}
                            </button>
                            <button type="button" class="btn btn-danger btn-sm"
                                onclick="deleteMediaItem('{{ route('admin.tippani.delMedia', [$tippani->id, $mediaItem->id]) }}', {{ $mediaItem->id }})">
                                {{ trans('global.delete') }}
                            </button>
                        </span>
                        @endcan
                    </li>
                </ul>
            </div>
            @endforeach
            @endif

        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">{{ trans('global.edit') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('global.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="edit-modal-form" action="" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="modelId" name="modelId" value="" />
                    <input type="hidden" id="mediaId" name="mediaId" value="" />
                    <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                        <label class="required" for="document">
                            {{ trans('global.tippani.fields.document') }}
                        </label>
                        <input type="file" class="btn btn-default" id="document" name="document"
                            value="{{ old('document', isset($tippani) ? $tippani->document : '') }}"
                            style="display: block; border-color:#ccc">
                        @if($errors->has('document'))
                        <p class="help-block">
                            {{ $errors->first('document') }}
                        </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.tippani.fields.document_helper') }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input class="btn btn-danger" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Edit Modal -->
@endsection

@section('scripts')
<script>
    $(document).on('click', '#modal-trigger', function() {
        var modelId = $(this).data('model-id');
        var mediaId = $(this).data('media-id');
        var route = $(this).data('route');
        $(".modal-body #modelId").val(modelId);
        $(".modal-body #mediaId").val(mediaId);
        $("#edit-modal-form").attr('action', route);
    });

    function deleteMediaItem(url, mediaItemId) {
        if (confirm("Are you sure you want to delete this media item?")) {
            var form = document.createElement('form');
            form.action = url;
            form.method = 'POST';
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var csrfField = document.createElement('input');
            csrfField.setAttribute('type', 'hidden');
            csrfField.setAttribute('name', '_token');
            csrfField.setAttribute('value', csrfToken);
            form.appendChild(csrfField);
            var methodField = document.createElement('input');
            methodField.setAttribute('type', 'hidden');
            methodField.setAttribute('name', '_method');
            methodField.setAttribute('value', 'DELETE');
            form.appendChild(methodField);
            var actsRegulationField = document.createElement('input');
            actsRegulationField.setAttribute('type', 'hidden');
            actsRegulationField.setAttribute('name', 'modelId');
            actsRegulationField.setAttribute('value', modelId);
            form.appendChild(actsRegulationField);
            var mediaItemIdField = document.createElement('input');
            mediaItemIdField.setAttribute('type', 'hidden');
            mediaItemIdField.setAttribute('name', 'mediaId');
            mediaItemIdField.setAttribute('value', mediaItemId);
            form.appendChild(mediaItemIdField);
            document.body.appendChild(form);
            form.submit();
        }
    }

</script>
@endsection