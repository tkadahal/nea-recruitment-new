@extends('layouts.app')

@section('content')
<div class="card-body {{ request()->routeIs('upload') ? 'active' : '' }}" id="upload">
    <form class="wizard-box" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-section">
            <h3>
                {{ trans('global.personal.category.fields.uploads') }}
            </h3>

            <div class="p3">
                <div class="row g-0 m-3">
                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <p class="pb-1">
                                <span class="text-danger">
                                    <b>{{ trans('global.personal.info.photoInfo') }}</b>
                                </span>
                            </p>
                            <label class="required" for="photo">
                                {{ trans('global.personal.fields.photo') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="photo" name="photo"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.uploadMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('photo'))
                            <p class="help-block">
                                {{ $errors->first('photo') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.photo_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 1)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 1)->first()->file_name }}"
                                    name="old_photo" id="old_photo" class="form-control" readonly>
                                {!! $user->media->where('media_type_id', 1)->first() !!}
                                @else
                                <img id="img-upload" style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <label class="required" for="sign">
                                {{ trans('global.personal.fields.sign') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="sign" name="sign"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.uploadMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('sign'))
                            <p class="help-block">
                                {{ $errors->first('sign') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.sign_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 2)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 2)->first()->file_name }}"
                                    name="old_sign" id="old_sign" class="form-control" readonly>
                                {!! $user->media->where('media_type_id', 2)->first() !!}
                                @else
                                <img id="sign-upload" style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <label class="required" for="citizenship_front">
                                {{ trans('global.personal.fields.citizenship_front') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="citizenship_front" name="citizenship_front"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.uploadMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('citizenship_front'))
                            <p class="help-block">
                                {{ $errors->first('citizenship_front') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.citizenship_front_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 3)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 3)->first()->file_name }}"
                                    name="old_citizenship_front" id="old_citizenship_front" class="form-control"
                                    readonly>
                                {!! $user->media->where('media_type_id', 3)->first() !!}
                                @else
                                <img id="citFront-upload" style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <label class="required" for="citizenship_back">
                                {{ trans('global.personal.fields.citizenship_back') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="citizenship_back" name="citizenship_back"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.uploadMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('citizenship_back'))
                            <p class="help-block">
                                {{ $errors->first('citizenship_back') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.citizenship_back_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 4)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 4)->first()->file_name }}"
                                    name="old_citizenship_back" id="old_citizenship_back" class="form-control" readonly>
                                {!! $user->media->where('media_type_id', 4)->first() !!}
                                @else
                                <img id="citBack-upload" style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <p class="pb-1">
                                <span class="text-danger">
                                    <b>{{ trans('global.personal.info.samabeshiInfo') }}</b>
                                </span>
                            </p>
                            <label class="" for="samabeshi">
                                {{ trans('global.personal.fields.samabeshi') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="samabeshi" name="samabeshi"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.samabeshiMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('samabeshi'))
                            <p class="help-block">
                                {{ $errors->first('samabeshi') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.samabeshi_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 5)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 5)->first()->file_name }}"
                                    name="old_samabeshi" id="old_samabeshi" class="form-control" readonly>
                                {!! $user->media->where('media_type_id', 5)->first() !!}
                                @else
                                <img id="samabeshi-upload" style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    @if (!empty($user->sanket_num))
                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <p class="pb-1">
                                <span class="text-danger">
                                    <b>{{ trans('global.personal.info.appointmentInfo') }}</b>
                                </span>
                            </p>
                            <label class="" for="appointment">
                                {{ trans('global.personal.fields.appointment') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="appointment" name="appointment"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.appointmentMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('appointment'))
                            <p class="help-block">
                                {{ $errors->first('appointment') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.appointment_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 12)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 12)->first()->file_name }}"
                                    name="old_appointment" id="old_appointment" class="form-control" readonly>
                                {!! $user->media->where('media_type_id', 12)->first() !!}
                                @else
                                <img id="appointment-upload" style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="upload-block">
                        <div class="col-md-6 form-group">
                            <p class="pb-1">
                                <span class="text-danger">
                                    <b>{{ trans('global.personal.info.recommendationInfo') }}</b>
                                </span>
                            </p>
                            <label class="" for="recommendation">
                                {{ trans('global.personal.fields.recommendation') }}
                                <i class="text-primary">
                                    ({{ trans('global.updateOrReplace') }})
                                </i>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="recommendation" name="recommendation"
                                    style="display: block; border-color:#ccc">
                            </div>
                            <p>
                                <span style="color: #b60bef">
                                    {{ trans('global.personal.info.recommendationMaxInfo') }}
                                </span>
                            </p>
                            @if ($errors->has('recommendation'))
                            <p class="help-block">
                                {{ $errors->first('recommendation') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.personal.fields.recommendation_helper') }}
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="input-preview-container">
                                @if ($user->media->where('media_type_id', 5)->isNotEmpty())
                                <input type="hidden"
                                    value="{{ $user->media->where('media_type_id', 5)->first()->file_name }}"
                                    name="old_recommendation" id="old_recommendation" class="form-control" readonly>
                                {!! $user->media->where('media_type_id', 5)->first() !!}
                                @else
                                <img id="recommendation-upload"
                                    style="max-width:100%; max-height:150px; margin-top:10px;">
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Save & Next</button>
        </div>
    </form>
</div>
@endsection

@section('styles')
<style>
    .upload-block {
        display: flex;
        width: 100%;
        background-color: #f8fafc;
        border: 1px solid #ced4da;
        padding: 0.75rem 2rem;
        border-radius: 4px;
        margin-bottom: 0.7rem;
    }

    .input-preview-container {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
</style>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            if (input.length) {
                input.val(log);
            } else {
                if (log) alert(log);
            }
        });

        function readPhotoURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readSignURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#sign-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readCitizenshipFrontURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#citFront-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readCitizenshipBackURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#citBack-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function samabeshiURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#samabeshi-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#photo").change(function() {
            readPhotoURL(this);
        });
        $("#sign").change(function() {
            readSignURL(this);
        });
        $("#citizenship_front").change(function() {
            readCitizenshipFrontURL(this);
        });
        $("#citizenship_back").change(function() {
            readCitizenshipBackURL(this);
        });
        $("#samabeshi").change(function() {
            samabeshiURL(this);
        });
</script>
@endsection