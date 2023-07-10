@extends('user.home')

@section('content')

<div role="tabpanel" class="tab-pane {{ request()->routeIs('training') ? 'active' : '' }}" id="educationDetail">

    <div class="card">

        <div class="card-body">

            <form class="wizard-box" action="{{ route('training.update', $training) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-section">
                    <h3>
                        {{ trans('global.training.title_singular') }}
                    </h3>

                    <div class="p3">

                        <div class="row g-3 m-3">

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                                    <label class="required" for="subject">
                                        {{ trans('global.training.fields.subject') }}
                                    </label>
                                    <input type="text" id="subject" name="subject" class="form-control"
                                        value="{{ old('subject', isset($training) ? $training->subject : '') }}">
                                    @if($errors->has('subject'))
                                    <p class="help-block">
                                        {{ $errors->first('subject') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.training.fields.subject_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('training_institute') ? 'has-error' : '' }}">
                                    <label class="required" for="training_institute">
                                        {{ trans('global.training.fields.training_institute') }}
                                    </label>
                                    <input type="text" id="training_institute" name="training_institute"
                                        class="form-control"
                                        value="{{ old('training_institute', isset($training) ? $training->training_institute : '') }}">
                                    @if($errors->has('training_institute'))
                                    <p class="help-block">
                                        {{ $errors->first('training_institute') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.training.fields.training_institute_helper') }}
                                    </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="radio-buttons">
                                    <label>
                                        <input type="radio" name="date_format" value="BS" checked>
                                        BS
                                    </label>
                                    <label>
                                        <input type="radio" name="date_format" value="AD">
                                        AD
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('training_from') ? 'has-error' : '' }}">
                                    <label class="required" for="training_from">
                                        {{ trans('global.training.fields.training_from') }}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" id="training_from" name="training_from" class="form-control"
                                            value="{{ old('training_from', isset($training) ? $training->training_from : '') }}">
                                        <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    {{-- <input type="text" id="training_from" name="training_from" class="form-control"
                                        value="{{ old('training_from', isset($training) ? $training->training_from : '') }}">
                                    --}}
                                    @if($errors->has('training_from'))
                                    <p class="help-block">
                                        {{ $errors->first('training_from') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.training.fields.training_from_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('training_to') ? 'has-error' : '' }}">
                                    <label class="required" for="training_to">
                                        {{ trans('global.training.fields.training_to') }}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" id="training_to" name="training_to" class="form-control"
                                            value="{{ old('training_to', isset($training) ? $training->training_to : '') }}">
                                        <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    {{-- <input type="text" id="training_to" name="training_to" class="form-control"
                                        value="{{ old('training_to', isset($training) ? $training->training_to : '') }}">
                                    --}}
                                    @if($errors->has('training_to'))
                                    <p class="help-block">
                                        {{ $errors->first('training_to') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.training.fields.training_to_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                                    <label class="required" for="percentage">
                                        {{ trans('global.training.fields.percentage') }}
                                    </label>
                                    <input type="number" step="0.01" min="0.00" max="99.99" id="percentage"
                                        name="percentage" class="form-control"
                                        value="{{ old('percentage', isset($training) ? $training->percentage : '') }}">
                                    @if($errors->has('percentage'))
                                    <p class="help-block">
                                        {{ $errors->first('percentage') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.training.fields.percentage_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('certificate') ? 'has-error' : '' }}">
                                    <label class="required" for="certificate">
                                        {{ trans('global.training.fields.certificate') }}
                                    </label>
                                    <input type="file" class="form-control" id="certificate" name="certificate"
                                        value="{{ old('certificate', isset($training) ? $training->certificate : '') }}"
                                        style="display: block; border-color:#ccc">
                                    @if(count($training->media))
                                    <input type="hidden" id="old_certificate" name="old_certificate"
                                        value="{{ $training->media->first()->file_name }}" readonly>
                                    @endif
                                    @if ($errors->has('certificate'))
                                    <p class="help-block">
                                        {{ $errors->first('certificate') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.training.fields.certificate_helper') }}
                                    </p>
                                    @if(count($training->media))
                                    {{ trans('global.existing_document.title_singular') }} :
                                    @foreach($training->media as $mediaItem)
                                    {!! $mediaItem !!}
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
        var trainingDateInput = $('#training_to, #training_from');
        var selectedDateFormat = $('input[name="date_format"]:checked').val();

        if (selectedDateFormat === 'BS') {
            trainingDateInput.nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                disableAfter: current_nepali_date
            });
        } else if (selectedDateFormat === 'AD') {
            trainingDateInput.datepicker({
                changeYear: true,
                changeMonth: true,
                dateFormat: "yy-mm-dd",
                autoclose: true,
                maxDate: 'today',
                yearRange: '-100:+0',
            });
        }

        $('input[name="date_format"]').on('change', function() {
            var selectedValue = $(this).val();

            if (selectedValue === 'BS') {
                trainingDateInput.removeClass('hasDatepicker');
                trainingDateInput.removeAttr('id');
                trainingDateInput.val('');
                trainingDateInput.nepaliDatePicker({
                    ndpYear: true,
                    ndpMonth: true,
                    ndpYearCount: 100,
                    disableAfter: current_nepali_date
                });
            } else if (selectedValue === 'AD') {
                trainingDateInput.removeClass('hasDatepicker');
                trainingDateInput.removeAttr('id');
                trainingDateInput.val('');
                trainingDateInput.datepicker({
                    changeYear: true,
                    changeMonth: true,
                    dateFormat: "yy-mm-dd",
                    autoclose: true,
                    maxDate: 'today',
                    yearRange: '-100:+0',
                });
            }
        });
    });
</script>

@endsection