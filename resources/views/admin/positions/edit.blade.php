@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.position.update', $position) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('put')
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.position.title_singular') }}
        </div>
        <div class="card-body">

            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                <label class="required" for="category_id">
                    {{ trans('global.position.fields.category_id') }}
                </label>
                <select name="category_id" id="category_id" class="form-control select2">
                    @foreach ($categories as $id => $category)
                    <option value="{{ $id }}" {{ (isset($position) && $position->category
                        ? $position->category>id
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
                    {{ trans('global.position.fields.category_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
                <label class="required" for="group_id">
                    {{ trans('global.position.fields.group_id') }}
                </label>
                <select name="group_id" id="group_id" class="form-control select2">
                    @foreach ($groups as $id => $group)
                    <option value="{{ $id }}" {{ (isset($position) && $position->group
                        ? $position->group->id
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
                    {{ trans('global.position.fields.group_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('level_id') ? 'has-error' : '' }}">
                <label class="required" for="level_id">
                    {{ trans('global.position.fields.level_id') }}
                </label>
                <select name="level_id" id="level_id" class="form-control select2">
                    @foreach ($levels as $id => $level)
                    <option value="{{ $id }}" {{ (isset($position) && $position->level
                        ? $position->level->id
                        : old('level_id')) == $id
                        ? 'selected'
                        : '' }}>
                        {{ $level }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('level_id'))
                <p class="help-block">
                    {{ $errors->first('level_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.position.fields.level_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="required" for="title">
                    {{ trans('global.position.fields.title') }}
                </label>
                <input type="number" id="title" name="title" class="form-control"
                    value="{{ old('title', isset($position) ? $position->title : '') }}">
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.position.fields.title_helper') }}
                </p>
            </div>

        </div>

        <div class="card-footer">
            <input class=" btn btn-danger" type="submit">
        </div>

    </form>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#group_id').on('change', function() {
            var groupId = $(this).val();
            if (groupId) {
                $.ajax({
                    url: '/admin/get-levels/' + groupId
                    , type: 'GET'
                    , dataType: 'json'
                    , success: function(data) {
                        $('#level_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
                        $.each(data, function(key, value) {
                            $('#level_id').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#level_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
            }
        });
    });

</script>
@endsection