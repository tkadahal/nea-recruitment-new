@extends('layouts.auth')
@section('content')
    <div class="row align-items-center h-100">
        <div class="col-12 col-xxl-6 col-lg-8 col-md-10 mx-auto">
            <div class="row form-wrapper">
                <div class="col-lg-6">
                    <div class="row bg-primary-light h-100">
                        <div class="container">
                            <div class="row align-items-center p-3">
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/nea-logo.png') }}" class="img-fluid logo-img"
                                        alt="{{ trans('global.site_title') }}">
                                </div>
                                <div class="col-md-9">
                                    <h4 class="font-weight-bold app-title">
                                        {{ trans('global.site_title') }}
                                    </h4>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12" style="float: left">
                                    <h6>अनलाईन आबेदनका लागि आवश्यक कागजातहरु : </h6>
                                    <ul class="list-unstyled">
                                        <li><span class="bullet-point">&#8226;</span> Point 1</li>
                                        <li><span class="bullet-point">&#8226;</span> Point 2</li>
                                        <li><span class="bullet-point">&#8226;</span> Point 3</li>
                                        <!-- Add more points here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-white d-flex align-items-center flex-column">
                    <form method="POST" action="{{ route('register') }}" class="p-5 w-100">
                        @csrf
                        <p class="text-muted text-center">{{ trans('global.register') }}</p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input name="name" type="text"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus
                                placeholder="{{ trans('global.login_name') }}" value="{{ old('name', null) }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-at"></i>
                                </span>
                            </div>
                            <input name="email" type="text"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus
                                placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <input name="mobile_number" type="text"
                                class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" required
                                autofocus placeholder="{{ trans('global.login_mobile') }}"
                                value="{{ old('mobile_number', null) }}">
                            @if ($errors->has('mobile_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mobile_number') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                placeholder="{{ trans('global.login_password') }}">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password_confirmation" type="password" id="password-confirm"
                                class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                required placeholder="{{ trans('global.login_password_confirmation') }}">
                            @if ($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ trans('global.register') }}
                                </button>
                            </div>

                            <div class="col-12 text-right mt-3">
                                <a class="btn btn-link px-0" href="{{ route('login') }}">
                                    {{ trans('global.login') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .bg-primary-light {
            background-color: #1a479c;
        }

        .bullet-point {
            display: inline-block;
            width: 1em;
            text-align: center;
            margin-right: 0.5em;
        }
    </style>
@endsection
