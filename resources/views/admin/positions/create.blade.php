@extends('layouts.admin')

@section('content')
    <div class="card">
        <form class="form-horizontal" action="{{ route('admin.position.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-header">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                {{ trans('global.create') }} {{ trans('global.position.title_singular') }}
            </div>
            <div class="card-body">

                <div class="form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
                    <label class="required" for="group_id">
                        {{ trans('global.position.fields.group_id') }}
                    </label>
                    <select name="group_id" id="group_id" class="form-control select2">
                        @foreach ($groups as $id => $group)
                            <option value="{{ $id }}"
                                {{ (isset($position) && $position->group ? $position->group->id : old('group_id')) == $id ? 'selected' : '' }}>
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

                <div class="form-group {{ $errors->has('sub_group_id') ? 'has-error' : '' }}">
                    <label class="required" for="sub_group_id">
                        {{ trans('global.position.fields.sub_group_id') }}
                    </label>
                    <select name="sub_group_id" id="sub_group_id" class="form-control select2">
                        @foreach ($subGroups as $id => $subGroup)
                            <option value="{{ $id }}"
                                {{ (isset($position) && $position->subGroup ? $position->subGroup->id : old('sub_group_id')) == $id
                                    ? 'selected'
                                    : '' }}>
                                {{ $subGroup }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('sub_group_id'))
                        <p class="help-block">
                            {{ $errors->first('sub_group_id') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.position.fields.sub_group_id_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('level_id') ? 'has-error' : '' }}">
                    <label class="required" for="level_id">
                        {{ trans('global.position.fields.level_id') }}
                    </label>
                    <select name="level_id" id="level_id" class="form-control select2">
                        @foreach ($levels as $id => $level)
                            <option value="{{ $id }}"
                                {{ (isset($position) && $position->level ? $position->level->id : old('level_id')) == $id ? 'selected' : '' }}>
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
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{ old('title', isset($position) ? $position->title : '') }}">
                    @if ($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.position.fields.title_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label class="label" for="description">
                        {{ trans('global.position.fields.description') }}
                    </label>
                    <textarea class="form-control ckeditor" id="description" name="description" rows="3">
                        {{ old('description', isset($about) ? $about->description : '') }}
                    </textarea>
                    @if ($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.position.fields.description_helper') }}
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

                $.ajax({
                    url: '/admin/getSubGroupsAndLevels/' + groupId,
                    type: 'GET',
                    success: function(data) {
                        var subGroupSelect = $('#sub_group_id');
                        subGroupSelect.empty();
                        $.each(data.subGroups, function(id, subGroup) {
                            subGroupSelect.append($('<option></option>').attr('value',
                                id).text(subGroup));
                        });

                        var levelSelect = $('#level_id');
                        levelSelect.empty();
                        $.each(data.levels, function(id, level) {
                            levelSelect.append($('<option></option>').attr('value', id)
                                .text(level));
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        // Handle error if needed
                    }
                });
            });
        });
    </script>
@endsection
