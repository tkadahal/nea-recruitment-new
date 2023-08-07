@extends('layouts.auth')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    @if (\Session::has('message'))
                    <p class="alert alert-info">
                        {{ \Session::get('message') }}
                    </p>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="header" style="text-align:center">
                            <img src="{{ asset('storage/logos/nea-mini.png') }}" width="100" height="100" />
                            <h1>{{ trans('global.site_title') }}</h1>
                        </div>
                        <p class="text-muted">{{ trans('global.register') }}</p>

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
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">
                                    {{ trans('global.register') }}
                                </button>
                            </div>
                            <div class="col-6 text-right">
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
</div>
@endsection
