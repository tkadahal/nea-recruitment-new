@extends('layouts.admin')

@section('content')
    <div class="card">
        <form class="form-horizontal" action="{{ route('admin.paymentVendor.update', $paymentVendor) }}" method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('put')
            <div class="card-header">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                {{ trans('global.create') }} {{ trans('global.paymentVendor.title_singular') }}
            </div>
            <div class="card-body">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="required" for="name">
                        {{ trans('global.paymentVendor.fields.name') }}
                    </label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{ old('name', isset($paymentVendor) ? $paymentVendor->name : '') }}">
                    @if ($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.name_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('payment_gateway') ? 'has-error' : '' }}">
                    <label class="required" for="payment_gateway">
                        {{ trans('global.paymentVendor.fields.payment_gateway') }}
                    </label>
                    <input type="text" id="payment_gateway" name="payment_gateway" class="form-control"
                        value="{{ old('payment_gateway', isset($paymentVendor) ? $paymentVendor->payment_gateway : '') }}">
                    @if ($errors->has('payment_gateway'))
                        <p class="help-block">
                            {{ $errors->first('payment_gateway') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.payment_gateway_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('merchant_id') ? 'has-error' : '' }}">
                    <label class="required" for="merchant_id">
                        {{ trans('global.paymentVendor.fields.merchant_id') }}
                    </label>
                    <input type="text" id="merchant_id" name="merchant_id" class="form-control"
                        value="{{ old('merchant_id', isset($paymentVendor) ? $paymentVendor->merchant_id : '') }}">
                    @if ($errors->has('merchant_id'))
                        <p class="help-block">
                            {{ $errors->first('merchant_id') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.merchant_id_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('merchant_code') ? 'has-error' : '' }}">
                    <label class="required" for="merchant_code">
                        {{ trans('global.paymentVendor.fields.merchant_code') }}
                    </label>
                    <input type="text" id="merchant_code" name="merchant_code" class="form-control"
                        value="{{ old('merchant_code', isset($paymentVendor) ? $paymentVendor->merchant_code : '') }}">
                    @if ($errors->has('merchant_code'))
                        <p class="help-block">
                            {{ $errors->first('merchant_code') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.merchant_code_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('app_id') ? 'has-error' : '' }}">
                    <label class="required" for="app_id">
                        {{ trans('global.paymentVendor.fields.app_id') }}
                    </label>
                    <input type="text" id="app_id" name="app_id" class="form-control"
                        value="{{ old('app_id', isset($paymentVendor) ? $paymentVendor->app_id : '') }}">
                    @if ($errors->has('app_id'))
                        <p class="help-block">
                            {{ $errors->first('app_id') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.app_id_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('app_name') ? 'has-error' : '' }}">
                    <label class="required" for="app_name">
                        {{ trans('global.paymentVendor.fields.app_name') }}
                    </label>
                    <input type="text" id="app_name" name="app_name" class="form-control"
                        value="{{ old('app_name', isset($paymentVendor) ? $paymentVendor->app_name : '') }}">
                    @if ($errors->has('app_name'))
                        <p class="help-block">
                            {{ $errors->first('app_name') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.app_name_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('token_url') ? 'has-error' : '' }}">
                    <label class="required" for="token_url">
                        {{ trans('global.paymentVendor.fields.token_url') }}
                    </label>
                    <input type="text" id="token_url" name="token_url" class="form-control"
                        value="{{ old('token_url', isset($paymentVendor) ? $paymentVendor->token_url : '') }}">
                    @if ($errors->has('token_url'))
                        <p class="help-block">
                            {{ $errors->first('token_url') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.token_url_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('checkout_url') ? 'has-error' : '' }}">
                    <label class="required" for="checkout_url">
                        {{ trans('global.paymentVendor.fields.checkout_url') }}
                    </label>
                    <input type="text" id="checkout_url" name="checkout_url" class="form-control"
                        value="{{ old('checkout_url', isset($paymentVendor) ? $paymentVendor->checkout_url : '') }}">
                    @if ($errors->has('checkout_url'))
                        <p class="help-block">
                            {{ $errors->first('checkout_url') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.checkout_url_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('verify_url') ? 'has-error' : '' }}">
                    <label class="required" for="verify_url">
                        {{ trans('global.paymentVendor.fields.verify_url') }}
                    </label>
                    <input type="text" id="verify_url" name="verify_url" class="form-control"
                        value="{{ old('verify_url', isset($paymentVendor) ? $paymentVendor->verify_url : '') }}">
                    @if ($errors->has('verify_url'))
                        <p class="help-block">
                            {{ $errors->first('verify_url') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.verify_url_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('recheck_url') ? 'has-error' : '' }}">
                    <label class="required" for="recheck_url">
                        {{ trans('global.paymentVendor.fields.recheck_url') }}
                    </label>
                    <input type="text" id="recheck_url" name="recheck_url" class="form-control"
                        value="{{ old('recheck_url', isset($paymentVendor) ? $paymentVendor->recheck_url : '') }}">
                    @if ($errors->has('recheck_url'))
                        <p class="help-block">
                            {{ $errors->first('recheck_url') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.recheck_url_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                    <label class="required" for="username">
                        {{ trans('global.paymentVendor.fields.username') }}
                    </label>
                    <input type="text" id="username" name="username" class="form-control"
                        value="{{ old('username', isset($paymentVendor) ? $paymentVendor->username : '') }}">
                    @if ($errors->has('username'))
                        <p class="help-block">
                            {{ $errors->first('username') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.username_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('verify_password') ? 'has-error' : '' }}">
                    <label class="required" for="verify_password">
                        {{ trans('global.paymentVendor.fields.verify_password') }}
                    </label>
                    <input type="text" id="verify_password" name="verify_password" class="form-control"
                        value="{{ old('verify_password', isset($paymentVendor) ? $paymentVendor->verify_password : '') }}">
                    @if ($errors->has('verify_password'))
                        <p class="help-block">
                            {{ $errors->first('verify_password') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.verify_password_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('cert_password') ? 'has-error' : '' }}">
                    <label class="required" for="cert_password">
                        {{ trans('global.paymentVendor.fields.cert_password') }}
                    </label>
                    <input type="text" id="cert_password" name="cert_password" class="form-control"
                        value="{{ old('cert_password', isset($paymentVendor) ? $paymentVendor->cert_password : '') }}">
                    @if ($errors->has('cert_password'))
                        <p class="help-block">
                            {{ $errors->first('cert_password') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.cert_password_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('public_key') ? 'has-error' : '' }}">
                    <label class="required" for="public_key">
                        {{ trans('global.paymentVendor.fields.public_key') }}
                    </label>
                    <input type="text" id="public_key" name="public_key" class="form-control"
                        value="{{ old('public_key', isset($paymentVendor) ? $paymentVendor->public_key : '') }}">
                    @if ($errors->has('public_key'))
                        <p class="help-block">
                            {{ $errors->first('public_key') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.public_key_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('secret_key') ? 'has-error' : '' }}">
                    <label class="required" for="secret_key">
                        {{ trans('global.paymentVendor.fields.secret_key') }}
                    </label>
                    <input type="text" id="secret_key" name="secret_key" class="form-control"
                        value="{{ old('secret_key', isset($paymentVendor) ? $paymentVendor->secret_key : '') }}">
                    @if ($errors->has('secret_key'))
                        <p class="help-block">
                            {{ $errors->first('secret_key') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.paymentVendor.fields.secret_key_helper') }}
                    </p>
                </div>
            </div>

            <div class="card-footer">
                <input class=" btn btn-danger" type="submit">
            </div>

        </form>
    </div>
@endsection
