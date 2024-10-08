@extends('layouts.app')

@section('content')
    <div class="card-body {{ request()->routeIs('payment') ? 'active' : '' }}" id="payment">

        @if (\Session::get('message'))
            <div class="alert alert-success alert-dismissible fade show" id="msg">
                <p>
                    {{ \Session::get('message') }}
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (\Session::get('error_message'))
            <div class="alert alert-danger alert-dismissible fade show" id="msg">
                <p>
                    {{ \Session::get('error_message') }}
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif
        <div class="wizard-box">
            <div class="card-section">
                <h3>
                    {{ trans('global.payment.title_singular') }}
                </h3>
                <div class="p-3">
                    <div class="row g-3 m-2">
                        <div class="col-md-4">
                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.payment.fields.advertisement_num') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->advertisement_num }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.payment.fields.category_id') }}
                                / {{ trans('global.payment.fields.group_id') }}
                                / {{ trans('global.payment.fields.sub_group_id') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->category->title }} /
                                {{ $application->advertisement->group->title }} /
                                {{ $application->advertisement->subGroup->title }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.application.fields.level_id') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->level->title }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.application.fields.qualification_id') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->qualification->title }}
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p class="text-primary" style="font-size: 1.2em;">
                                {{ trans('global.payment.info.samabeshiInfo') }}
                            </p>
                            <a href="{{ route('application.edit', $application->id) }}" style="color: #c014f9">
                                {{ trans('global.payment.info.samabeshiChangeInfo') }}
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="samabeshiGroupsContainer" data-advertisement-id="{{ $application->id }}">
                                        <div class="col" style="display: flex; align-items: center;">
                                            <div style="flex: 1;">
                                                @foreach ($samabeshiGroups as $id => $samabeshiGroup)
                                                    <div class="form-check" style="margin-bottom: 10px;">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $samabeshiGroup['id'] }}"
                                                            id="{{ $samabeshiGroup['id'] }}" name="samabeshi_groups[]"
                                                            style="width: 20px; height: 20px; border: var(--bs-border-width) solid #0d0d0d;"
                                                            @if ($samabeshiGroup['applied']) checked
                                                            onclick="return false;" @else disabled @endif>
                                                        <label class="form-check-label" for="{{ $samabeshiGroup['id'] }}"
                                                            style="font-size: 1.2em; margin-left: 5px;">
                                                            <span>{{ $samabeshiGroup['title'] }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="payment-text-info"
                                        style="font-size: 2em; text-align: justify; text-align-last: end; margin-left: 10px;">
                                        <i>
                                            <label class="form-check-label" for="">
                                                {{ trans('global.payment.info.payableAmountInfo') }} :
                                            </label>
                                            {{ $application->applicationFee }}
                                        </i>
                                    </p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row mt-3">
                                    <p class="text-danger" style="font-size: 1.2em;">
                                        {{ trans('global.payment.info.paymentVendorSelectionInfo') }}
                                    </p>
                                    <div class="bill-medium">
                                        @foreach ($paymentVendors as $paymentVendor)
                                            @if ($paymentVendor->payment_gateway === 'imepay')
                                                <div class="bill-item">
                                                    <a href="{{ route('imepay.payments', $application->uuid) }}">
                                                        @foreach ($paymentVendor->media as $mediaItem)
                                                            {!! $mediaItem !!}
                                                        @endforeach
                                                    </a>
                                                    <p>{{ $paymentVendor->name }}</p>
                                                    {{-- <img src="{{ asset('storage/logos/paymentVendors/imePay.svg') }}"
                                                    style="width: 100px">
                                                <p>Ime Pay</p> --}}
                                                </div>
                                            @endif
                                            {{-- @endforeach
                                            @foreach ($paymentVendors as $paymentVendor) --}}
                                            @if ($paymentVendor->payment_gateway === 'connectips')
                                                <div class="bill-item">
                                                    <a href="{{ route('connectips.payments', [$application->uuid]) }}">
                                                        @foreach ($paymentVendor->media as $mediaItem)
                                                            {!! $mediaItem !!}
                                                        @endforeach
                                                    </a>
                                                    <p>{{ $paymentVendor->name }}</p>
                                                </div>
                                            @endif
                                            {{-- @foreach ($paymentVendors as $paymentVendor) --}}
                                            @if ($paymentVendor->payment_gateway === 'esewa')
                                                <div class="bill-item">
                                                    <a href="{{ route('esewa.payments', $application->uuid) }}">
                                                        @foreach ($paymentVendor->media as $mediaItem)
                                                            {!! $mediaItem !!}
                                                        @endforeach
                                                    </a>
                                                    <p>{{ $paymentVendor->name }}</p>
                                                </div>
                                            @endif
                                            {{-- @foreach ($paymentVendors as $paymentVendor) --}}
                                            @if ($paymentVendor->payment_gateway === 'khalti')
                                                <div class="bill-item">
                                                    <form action="{{ route('khalti.payments', $application->uuid) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link">
                                                            @foreach ($paymentVendor->media as $mediaItem)
                                                                {!! $mediaItem !!}
                                                            @endforeach
                                                        </button>
                                                    </form>
                                                    <p>{{ $paymentVendor->name }}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save & Next</button>
                </div> --}}
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .bill-medium {
            display: flex;
            flex-wrap: wrap;
            gap: 70px;
        }

        .bill-item {
            display: flex;
            flex-direction: column;
            gap: 14px;
            align-items: center;
            position: relative;
        }

        .bill-item img {
            padding: 22px;
            border: 1px solid #E6E6E6;
            border-radius: 100%;
            width: 100px;
            height: 100px;
            transition: 0.3s ease-in-out;
        }

        @media only screen and (max-width: 600px) {
            .payment-text-info {
                font-size: small !important;
                text-align: left !important;
                margin-left: 0;
            }
        }
    </style>
@endsection
