@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>{{ trans('global.paymentVendor.title') }} </strong> {{ trans('global.list') }}

            @can('paymentVendor_create')
                <a href="{{ route('admin.paymentVendor.create') }}" class="btn btn-outline-success d-inline-block float-right">
                    {{ trans('global.add') }} {{ trans('global.paymentVendor.title_singular') }}
                </a>
            @endcan

        </div>

        <div class="card-body">
            <div class="row">
                @foreach ($paymentVendors as $key => $paymentVendor)
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-paymentVendor">
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ trans('global.edit') }}
                                        </td>
                                        <td>
                                            @can('paymentVendor_edit')
                                                <a href="{{ route('admin.paymentVendor.edit', $paymentVendor) }}"
                                                    class="btn btn-info btn-sm">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ trans('global.paymentVendor.fields.id') }}
                                        </td>
                                        <td>
                                            {{ $paymentVendor->id ?? '' }}
                                        </td>
                                    </tr>
                                    @if ($paymentVendor->name)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.name') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->name ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->payment_gateway)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.payment_gateway') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->payment_gateway ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->merchant_id)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.merchant_id') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->merchant_id ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->merchant_code)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.merchant_code') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->merchant_code ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->app_id)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.app_id') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->app_id ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->app_name)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.app_name') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->app_name ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->token_url)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.token_url') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->token_url ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->checkout_url)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.checkout_url') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->checkout_url ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->verify_url)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.verify_url') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->verify_url ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->recheck_url)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.recheck_url') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->recheck_url ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->username)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.username') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->username ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->verify_password)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.verify_password') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->verify_password ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->cert_password)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.cert_password') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->cert_password ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->public_key)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.public_key') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->public_key ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($paymentVendor->secret_key)
                                        <tr>
                                            <td>
                                                {{ trans('global.paymentVendor.fields.secret_key') }}
                                            </td>
                                            <td>
                                                {{ $paymentVendor->secret_key ?? '' }}
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            {{ trans('global.published') }}
                                        </td>
                                        <td>
                                            @livewire(
                                                'toggle-button',
                                                [
                                                    'model' => $paymentVendor,
                                                    'field' => 'active',
                                                ],
                                                key($paymentVendor->id)
                                            )
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
