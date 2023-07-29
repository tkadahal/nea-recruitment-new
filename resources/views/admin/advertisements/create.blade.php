@extends('layouts.admin')

@section('content')
    <div class="card">
        <form class="form-horizontal" action="{{ route('admin.advertisement.store') }}" method="POST"
            enctype="multipart/form-data">

            @csrf
            <div class="card-header">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                {{ trans('global.create') }} {{ trans('global.advertisement.title_singular') }}
            </div>
            <div class="card-body">
                <div class="card-section">
                    <h3>
                        बिज्ञापन विवरण
                    </h3>
                    <div class="p-2">
                        <div class="row g-3">
                            <div class="col-md-4 form-group {{ $errors->has('fiscal_year_id') ? 'has-error' : '' }}">
                                <label class="required" for="fiscal_year_id">
                                    {{ trans('global.advertisement.fields.fiscal_year_id') }}
                                </label>
                                <select name="fiscal_year_id" id="fiscal_year_id" class="form-control select2">
                                    @foreach ($fiscalYears as $id => $fiscalYear)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->fiscalYear
                                                ? $advertisement->fiscalYear->id
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
                                    {{ trans('global.advertisement.fields.fiscal_year_id_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('advertisement_num') ? 'has-error' : '' }}">
                                <label class="required" for="advertisement_num">
                                    {{ trans('global.advertisement.fields.advertisement_num') }}
                                </label>
                                <input type="text" id="advertisement_num" name="advertisement_num" class="form-control"
                                    value="{{ old('advertisement_num', isset($advertisement) ? $advertisement->advertisement_num : '') }}">
                                @if ($errors->has('advertisement_num'))
                                    <p class="help-block">
                                        {{ $errors->first('advertisement_num') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.advertisement_num_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('exam_center_id') ? 'has-error' : '' }}">
                                <label class="required" for="exam_center_id">
                                    {{ trans('global.advertisement.fields.exam_center_id') }}
                                </label>
                                <select name="exam_center_id" id="exam_center_id" class="form-control select2">
                                    @foreach ($examCenters as $id => $examCenter)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->examCenter
                                                ? $advertisement->examCenter->id
                                                : old('exam_center_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $examCenter }}
                                        </option>
                                    @endforeach
                                </select>
                                <p>
                                    <span class="text-danger">
                                        {{ trans('global.advertisement.info.examCenterInfo') }}
                                    </span>
                                </p>
                                @if ($errors->has('exam_center_id'))
                                    <p class="help-block">
                                        {{ $errors->first('exam_center_id') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.exam_center_id_helper') }}
                                </p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 form-group {{ $errors->has('start_date_np') ? 'has-error' : '' }}">
                                <label class="required" for="start_date_np">
                                    {{ trans('global.advertisement.fields.start_date_np') }}
                                </label>
                                <input type="text" id="start_date_np" name="start_date_np"
                                    class="form-control nepali-calendar"
                                    value="{{ old('start_date_np', isset($advertisement) ? $advertisement->start_date_np : '') }}">
                                <input type="hidden" id="start_date_en" name="start_date_en"
                                    value="{{ old('start_date_en', isset($advertisement) ? $advertisement->start_date_en : '') }}" />
                                @if ($errors->has('start_date_np'))
                                    <p class="help-block">
                                        {{ $errors->first('start_date_np') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.start_date_np_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('end_date_np') ? 'has-error' : '' }}">
                                <label class="required" for="end_date_np">
                                    {{ trans('global.advertisement.fields.end_date_np') }}
                                </label>
                                <input type="text" id="end_date_np" name="end_date_np"
                                    class="form-control nepali-calendar"
                                    value="{{ old('end_date_np', isset($advertisement) ? $advertisement->end_date_np : '') }}">
                                <input type="hidden" id="end_date_en" name="end_date_en"
                                    value="{{ old('end_date_en', isset($advertisement) ? $advertisement->end_date_en : '') }}" />
                                @if ($errors->has('end_date_np'))
                                    <p class="help-block">
                                        {{ $errors->first('end_date_np') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.end_date_np_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4  form-group {{ $errors->has('penalty_end_date_np') ? 'has-error' : '' }}">
                                <label class="required" for="penalty_end_date_np">
                                    {{ trans('global.advertisement.fields.penalty_end_date_np') }}
                                </label>
                                <input type="text" id="penalty_end_date_np" name="penalty_end_date_np"
                                    class="form-control nepali-calendar"
                                    value="{{ old('penalty_end_date_np', isset($advertisement) ? $advertisement->penalty_end_date_np : '') }}">
                                <input type="hidden" id="penalty_end_date_en" name="penalty_end_date_en"
                                    value="{{ old('penalty_end_date_en', isset($advertisement) ? $advertisement->penalty_end_date_en : '') }}" />
                                @if ($errors->has('penalty_end_date_np'))
                                    <p class="help-block">
                                        {{ $errors->first('penalty_end_date_np') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.penalty_end_date_np_helper') }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-section">
                    <h3>
                        सेवा/समूह विवरण
                    </h3>
                    <div class="p-2">

                        <div class="row">

                            <div class="col-md-4 form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                <label class="required" for="category_id">
                                    {{ trans('global.advertisement.fields.category_id') }}
                                </label>
                                <select name="category_id" id="category_id" class="form-control select2">
                                    @foreach ($categories as $id => $category)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->category ? $advertisement->category->id : old('category_id')) ==
                                            $id
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
                                    {{ trans('global.advertisement.fields.category_id_helper') }}
                                </p>
                            </div>


                            <div class="col-md-4 form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
                                <label class="required" for="group_id">
                                    {{ trans('global.advertisement.fields.group_id') }}
                                </label>
                                <select name="group_id" id="group_id" class="form-control select2">
                                    @foreach ($groups as $id => $group)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->group ? $advertisement->group->id : old('group_id')) == $id
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
                                    {{ trans('global.advertisement.fields.group_id_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('sub_group_id') ? 'has-error' : '' }}">
                                <label class="required" for="sub_group_id">
                                    {{ trans('global.advertisement.fields.sub_group_id') }}
                                </label>
                                <select name="sub_group_id" id="sub_group_id" class="form-control select2">
                                    @foreach ($subGroups as $id => $subGroup)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->subGroup ? $advertisement->subGroup->id : old('sub_group_id')) ==
                                            $id
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
                                    {{ trans('global.advertisement.fields.sub_group_id_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('level_id') ? 'has-error' : '' }}">
                                <label class="required" for="level_id">
                                    {{ trans('global.advertisement.fields.level_id') }}
                                </label>
                                <select name="level_id" id="level_id" class="form-control select2">
                                    @foreach ($levels as $id => $level)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->level ? $advertisement->level->id : old('level_id')) == $id
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
                                    {{ trans('global.advertisement.fields.level_id_helper') }}
                                </p>
                            </div>


                            {{-- <div class="col-md-4 form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                            <label class="required" for="category_id">
                                {{ trans('global.advertisement.fields.category_id') }}
                            </label>
                            <select name="category_id" id="category_id" class="form-control select2">
                                @foreach ($categories as $id => $category)
                                <option value="{{ $id }}" {{ (isset($advertisement) && $advertisement->category ?
                                    $advertisement->category->id : old('category_id')) == $id
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
                                {{ trans('global.advertisement.fields.category_id_helper') }}
                            </p>
                        </div> --}}

                        </div>
                    </div>
                </div>

                <div class="card-section">
                    <h3>
                        महशुल विवरण
                    </h3>
                    <div class="p-2">

                        <div class="row">

                            <div class="col-md-4 form-group {{ $errors->has('open_fee') ? 'has-error' : '' }}">
                                <label class="required" for="open_fee">
                                    {{ trans('global.advertisement.fields.open_fee') }}
                                </label>
                                <input type="number" id="open_fee" name="open_fee" class="form-control"
                                    value="{{ old('open_fee', isset($advertisement) ? $advertisement->open_fee : '') }}">
                                @if ($errors->has('open_fee'))
                                    <p class="help-block">
                                        {{ $errors->first('open_fee') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.open_fee_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('samabeshi_fee') ? 'has-error' : '' }}">
                                <label class="" for="samabeshi_fee">
                                    {{ trans('global.advertisement.fields.samabeshi_fee') }}
                                </label>
                                <input type="number" id="samabeshi_fee" name="samabeshi_fee" class="form-control"
                                    value="{{ old('samabeshi_fee', isset($advertisement) ? $advertisement->samabeshi_fee : '') }}">
                                @if ($errors->has('samabeshi_fee'))
                                    <p class="help-block">
                                        {{ $errors->first('samabeshi_fee') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.samabeshi_fee_helper') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-section">
                    <h3>
                        निर्धारण विवरण
                    </h3>
                    <div class="p-2">

                        <div class="row">

                            <div class="col-md-4 form-group {{ $errors->has('designation_id') ? 'has-error' : '' }}">
                                <label class="required" for="designation_id">
                                    {{ trans('global.advertisement.fields.designation_id') }}
                                </label>
                                <select name="designation_id" id="designation_id" class="form-control select2">
                                    @foreach ($designations as $id => $designation)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->designation
                                                ? $advertisement->designation->id
                                                : old('designation_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $designation }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('designation_id'))
                                    <p class="help-block">
                                        {{ $errors->first('designation_id') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.designation_id_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('qualification_id') ? 'has-error' : '' }}">
                                <label class="required" for="qualification_id">
                                    {{ trans('global.advertisement.fields.qualification_id') }}
                                </label>
                                <select name="qualification_id" id="qualification_id" class="form-control select2">
                                    @foreach ($qualifications as $id => $qualification)
                                        <option value="{{ $id }}"
                                            {{ (isset($advertisement) && $advertisement->qualification
                                                ? $advertisement->qualification->id
                                                : old('qualification_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $qualification }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('qualification_id'))
                                    <p class="help-block">
                                        {{ $errors->first('qualification_id') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.qualification_id_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('training_period') ? 'has-error' : '' }}">
                                <label class="" for="training_period">
                                    {{ trans('global.advertisement.fields.training_period') }}
                                </label>
                                <input type="number" id="training_period" name="training_period" class="form-control"
                                    value="{{ old('training_period', isset($advertisement) ? $advertisement->training_period : '') }}">
                                @if ($errors->has('training_period'))
                                    <p class="help-block">
                                        {{ $errors->first('training_period') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.training_period_helper') }}
                                </p>
                            </div>

                            <div class="col-md-4 form-group {{ $errors->has('experience_period') ? 'has-error' : '' }}">
                                <label class="" for="experience_period">
                                    {{ trans('global.advertisement.fields.experience_period') }}
                                </label>
                                <input type="number" id="experience_period" name="experience_period"
                                    class="form-control"
                                    value="{{ old('experience_period', isset($advertisement) ? $advertisement->experience_period : '') }}">
                                @if ($errors->has('experience_period'))
                                    <p class="help-block">
                                        {{ $errors->first('experience_period') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.advertisement.fields.experience_period_helper') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="col-md-4">
                            <label class="required" for="samabeshi_group_id">
                                समाबेशी समूह
                            </label>
                            @foreach ($samabeshiGroups as $id => $samabeshiGroup)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $id }}"
                                        id="{{ $id }}" name="samabeshi_groups[]"
                                        @if (old('samabeshi_groups') && in_array($id, old('samabeshi_groups'))) checked @endif>
                                    <label class="form-check-label" for="{{ $id }}">
                                        {{ $samabeshiGroup }}
                                    </label>
                                </div>
                            @endforeach
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

@section('styles')
    <style>
        .card-section {
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            margin-bottom: 40px;
            padding: 10px;
            position: relative;
        }

        .card-section h3 {
            background: #ffffff;
            color: #2680eb;
            font-size: 18px;
            /* font-size: .938rem; */
            font-weight: 600;
            margin-bottom: 20px;
            padding: 0 5px 5px;
            position: absolute;
            top: -10px;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#start_date_np').nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                onChange: updateStartDateAD
            });

            $('#start_date_np').on('input', updateStartDateAD);

            function updateStartDateAD() {
                var selectedDate = $('#start_date_np').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#start_date_en').val(equivalentAD);
            }

            $('#end_date_np').nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                onChange: updateEndDateAD
            });

            $('#end_date_np').on('input', updateEndDateAD);

            function updateEndDateAD() {
                var selectedDate = $('#end_date_np').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#end_date_en').val(equivalentAD);
            }

            $('#penalty_end_date_np').nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                onChange: updatePenaltyEndDateAD
            });

            $('#penalty_end_date_np').on('input', updatePenaltyEndDateAD);

            function updatePenaltyEndDateAD() {
                var selectedDate = $('#penalty_end_date_np').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#penalty_end_date_en').val(equivalentAD);
            }

            $('#group_id').on('change', function() {
                var groupId = $(this).val();
                if (groupId) {
                    $.ajax({
                        url: '/admin/get-subgroups/' + groupId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#sub_group_id').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $.each(data, function(key, value) {
                                $('#sub_group_id').append('<option value="' + key +
                                    '">' + value + '</option>');
                            });
                        }
                    });

                    $.ajax({
                        url: '/admin/get-levels/' + groupId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#level_id').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $.each(data, function(key, value) {
                                $('#level_id').append('<option value="' + key + '">' +
                                    value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#sub_group_id').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $('#level_id').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                }
            });
        });
    </script>
@endsection
