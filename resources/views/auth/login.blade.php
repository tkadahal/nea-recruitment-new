@extends('layouts.auth')
@section('content')
    <div class="row align-items-center h-100">
        <div class="col-12 col-xxl-6 col-lg-8 col-md-10 mx-auto">
            <div class="row form-wrapper">
                <div class="col-lg-6">
                    <div class="row align-items-center bg-primary-light text-center h-100">
                        <div class="container">
                            <div class="text-center text-white">
                                <img src="{{ asset('storage/nea-logo.png') }}" class="img-fluid logo-img"
                                    alt="{{ trans('global.site_title') }}" style="width: 150px">
                                <h3 class="font-weight-bold app-title mt-3">{{ trans('global.site_title') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-white d-flex align-items-center flex-column">
                    <form method="POST" action="{{ route('login') }}" class="p-5 w-100">
                        {{ csrf_field() }}

                        <p class="text-muted text-center">{{ trans('global.login') }}</p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
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
                        <div class="row">
                            <div class="col-12 text-right">
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a>
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ trans('global.login') }}
                                </button>
                            </div>

                            <div class="col-12 mt-4">
                                <p class="text-muted text-center"> खाता छैन?</p>
                                <a class="btn btn-info btn-block" href="{{ route('register') }}">
                                    {{ trans('global.register') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row d-flex justify-content-between pt-2 pb-2 w-100">
                    <div class="col">
                        <span class="help--btn">
                            <span class="icon mr-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.6 0H6.4C5.08 0 4 1.0125 4 2.25V21.75C4 22.9875 5.08 24 6.4 24H17.6C18.92 24 20 22.9875 20 21.75V2.25C20 1.0125 18.92 0 17.6 0ZM8.8 1.125H15.2V1.875H8.8V1.125ZM12 22.5C11.5757 22.5 11.1687 22.342 10.8686 22.0607C10.5686 21.7794 10.4 21.3978 10.4 21C10.4 20.6022 10.5686 20.2206 10.8686 19.9393C11.1687 19.658 11.5757 19.5 12 19.5C12.4243 19.5 12.8313 19.658 13.1314 19.9393C13.4314 20.2206 13.6 20.6022 13.6 21C13.6 21.3978 13.4314 21.7794 13.1314 22.0607C12.8313 22.342 12.4243 22.5 12 22.5ZM18.4 18H5.6V3H18.4V18Z"
                                        fill="white">
                                    </path>
                                </svg>
                            </span>विस्तृत जानकारीका लागी सम्पर्क नं:‍ +९७७-०१-४४१२७८३, ९८५१२८५९२० (कार्यालय समय 10:00
                            A.M.-5:00 P.M.)
                        </span>
                    </div>
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
    </style>
@endsection
