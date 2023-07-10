@extends('layouts.admin')

@section('content')

<div class="card">
    <form class="form-horizontal" action="{{ route('admin.admin.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="card-header">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            {{ trans('global.create') }} {{ trans('global.admin.title_singular') }}
        </div>

        <div class="card-body">

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label class="required" for="name">
                    {{ trans('global.admin.fields.name') }}
                </label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', isset($admin) ? $admin->name : '') }}">
                @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="required" for="email">
                    {{ trans('global.admin.fields.email') }}
                </label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ old('email', isset($admin) ? $admin->email : '') }}">
                @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.email_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : '' }}">
                <label class="required" for="mobile_number">
                    {{ trans('global.admin.fields.mobile_number') }}
                </label>
                <input type="number" id="mobile_number" name="mobile_number" class="form-control"
                    value="{{ old('mobile_number', isset($admin) ? $admin->mobile_number : '') }}">
                @if($errors->has('mobile_number'))
                <p class="help-block">
                    {{ $errors->first('mobile_number') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.mobile_number_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label class="required" for="password">
                    {{ trans('global.admin.fields.password') }}
                </label>
                <input type="password" id="password" name="password" class="form-control">
                @if($errors->has('password'))
                <p class="help-block">
                    {{ $errors->first('password') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.password_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label class="required" for="roles">
                    {{ trans('global.admin.fields.roles') }}
                    <span class="btn btn-info btn-xs select-all">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all">Deselect all</span>
                </label>
                <select name="roles[]" id="roles"
                    class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" multiple="multiple">
                    @foreach($roles as $id => $roles)
                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($admin) && $admin->
                        roles->contains($id)) ?
                        'selected' : '' }}>
                        {{ $roles }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                <p class="help-block">
                    {{ $errors->first('roles') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.roles_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('exam_center_id') ? 'has-error' : '' }}">
                <label class="required" for="exam_center_id">
                    {{ trans('global.admin.fields.exam_center_id') }}
                </label>
                <select name="exam_center_id" id="exam_center_id" class="form-control select2">
                    @foreach ($examCenters as $id => $examCenter)
                    <option value="{{ $id }}" {{ (isset($admin) && $admin->examCenter
                        ? $admin->examCenter->ID
                        : old('exam_center_id')) == $id
                        ? 'selected'
                        : '' }}>
                        {{ $examCenter }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('exam_center_id'))
                <p class="help-block">
                    {{ $errors->first('exam_center_id') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.exam_center_id_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('advertisements') ? 'has-error' : '' }}">
                <label class="required" for="advertisements">
                    {{ trans('global.admin.fields.advertisements') }}
                    <span class="btn btn-info btn-xs select-all">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all">Deselect all</span>
                </label>
                <select name="advertisements[]" id="advertisements"
                    class="form-control select2 {{ $errors->has('advertisements') ? 'is-invalid' : '' }}"
                    multiple="multiple">
                    @foreach($advertisements as $id => $advertisements)
                    <option value="{{ $id }}" {{ (in_array($id, old('advertisements', [])) || isset($admin) && $admin->
                        advertisements->contains($id)) ?
                        'selected' : '' }}>
                        {{ $advertisements }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('advertisements'))
                <p class="help-block">
                    {{ $errors->first('advertisements') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.admin.fields.advertisements_helper') }}
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
    $('#exam_center_id').on('change', function() {
        var examCenterId = $(this).val();
        if (examCenterId) {
            $.ajax({
                url: '/admin/get-advertisements/' + examCenterId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#advertisements').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $.each(data, function(key, value) {
                        $('#advertisements').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#advertisements').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
        }
    });
});
</script>
@endsection