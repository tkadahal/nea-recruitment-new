@extends('layouts.admin')

@section('content')
    <div class="form-group d-flex justify-content-between">
        <a class="btn btn-warning" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a>


        <div class="d-flex align-items-center">
            @if (auth('admin')->user()->is_checker)
                @if (
                    !$payment->paymentVerification ||
                        ($payment->paymentVerification->is_checked == false && $payment->paymentVerification->is_rejected == false))
                    <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="action" value="verify">
                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                        <button type="submit" class="btn btn-success ml-2">
                            Verify and Send to Approver
                        </button>
                    </form>
                @endif

                @if (
                    !$payment->paymentVerification ||
                        ($payment->paymentVerification->is_rejected == false &&
                            $payment->paymentVerification->is_approved == false &&
                            $payment->paymentVerification->is_checked == false))
                    <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="action" value="reject">
                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                        <button type="submit" class="btn btn-danger ml-2">
                            Reject This Application
                        </button>
                    </form>
                @endif
            @endif

            @if (auth('admin')->user()->is_approver)
                @if (
                    // Approve condition
                    $payment->paymentVerification &&
                        $payment->paymentVerification->is_checked == true &&
                        $payment->paymentVerification->is_approved == false &&
                        $payment->paymentVerification->is_rejected == false)
                    <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="action" value="approve">
                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                        <button type="submit" class="btn btn-success ml-2">
                            Approve
                        </button>
                    </form>
                @endif

                @if (
                    // Send Back to Checker condition
                    $payment->paymentVerification &&
                        $payment->paymentVerification->is_checked == true &&
                        $payment->paymentVerification->is_approved == false &&
                        $payment->paymentVerification->is_rejected == false)
                    <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="action" value="back">
                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                        <button type="submit" class="btn btn-warning ml-2">
                            Send Back to Checker
                        </button>
                    </form>
                @endif

                @if (
                    $payment->paymentVerification &&
                        $payment->paymentVerification->is_rejected == false &&
                        $payment->paymentVerification->is_approved == false &&
                        $payment->paymentVerification->is_checked == true)
                    <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="action" value="reject">
                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                        <button type="submit" class="btn btn-danger ml-2">
                            Reject This Application
                        </button>
                    </form>
                @endif
            @endif
        </div>


    </div>

    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i>
            {{ trans('global.show') }} <strong> {{ trans('global.applicationFee.title_singular') }}</strong>
        </div>

        <div class="card-body">
            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active">
                    <a class="nav-link active" href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                        aria-expanded="true">
                        {{ trans('global.application.title_singular') }}
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a class="nav-link" href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                        aria-expanded="true">
                        {{ trans('global.personal.title_singular') }}
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a class="nav-link" href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                        aria-expanded="false">
                        {{ trans('global.contact.title_singular') }}
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a class="nav-link" href="#step4" data-toggle="tab" aria-controls="step4" role="tab">
                        {{ trans('global.education.title_singular') }}
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a class="nav-link" href="#step5" data-toggle="tab" aria-controls="step5" role="tab">
                        {{ trans('global.training.title_singular') }}
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a class="nav-link" href="#step6" data-toggle="tab" aria-controls="step6" role="tab">
                        {{ trans('global.experience.title_singular') }}
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a class="nav-link" href="#step7" data-toggle="tab" aria-controls="step7" role="tab">
                        {{ trans('global.personal.category.fields.uploads') }}
                    </a>
                </li>
            </ul>

            <div class="tab-content mt-5 pt-10" id="main_form">
                <div class="tab-pane active" role="tabpanel" id="step1">
                    <div class="p-2">
                        <div class="card-section">
                            <h3>आवेदन विवरण</h3>
                            <div class="row g-3 m-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            आवेदन गरिएका समावेशी समूहहरु :
                                        </label>
                                        @foreach ($application->samabeshiGroups as $key => $item)
                                            <span class=" badge badge-info custom-badge-lg">
                                                {{ $item->title }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            आवेदन मिति :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $application->created_at ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            आवेदन शुल्क :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $payment->amount ?? '' }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-section">
                            <h3>भुक्तानी विवरण</h3>
                            <div class="row g-3 m-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            Payment Gateway :
                                        </label>
                                        <span class=" badge badge-info custom-badge-lg">
                                            {{ $payment->payment_gateway ?? '' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            भुक्तानी मिति :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $payment->updated_at ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            भुक्तानी शुल्क :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $payment->paid_amount ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            Reference Id :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $payment->reference_id ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            Transaction Id :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $payment->transaction_id ?? '' }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="step2">
                    <div class="p-2">
                        <div class="card-section">
                            <h3>{{ trans('global.personal.category.fields.personalDetails') }}</h3>
                            <div class="row g-3 m-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class=" badge badge-info custom-badge-lg">
                                            {{ $user->gender->title ?? '' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="sanket_num">
                                            {{ trans('global.personal.fields.sanket_num') }} :
                                        </label>
                                        <input type="text" id="sanket_num" name="sanket_num" class="form-control"
                                            value="{{ $user->sanket_num ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.name') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.name_np') }} :
                                        </label>
                                        <input type="text" id="name_np" name="name_np" class="form-control"
                                            value="{{ $user->name_np ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.email') }} :
                                        </label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            value="{{ $user->email ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.mobile_number') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->mobile_number ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.dob_np') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->dob_np ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.dob_en') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->dob_en ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6 form-check">
                                    <input type="hidden" name="is_handicapped" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" id="is_handicapped"
                                        name="is_handicapped" style="border: var(--bs-border-width) solid #0d0d0d;"
                                        {{ old('is_handicapped', isset($user) ? $user->is_handicapped : null) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_handicapped">
                                        {{ trans('global.personal.fields.is_handicapped') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="card-section">
                            <h3>{{ trans('global.personal.category.fields.citizenshipDetails') }}</h3>
                            <div class="row g-3 m-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.citizenship_number') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->citizenship_number ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.citizenship_issued_date') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->citizenship_issued_date ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.personal.fields.citizenship_district_id') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->citizenshipDistrict->title ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="step3">
                    <div class="p-2">
                        <div class="card-section">
                            <h3> {{ trans('global.contact.category.fields.permanent') }}</h3>
                            <div class="row g-3 mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.perma_province') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->permaProvince->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.perma_district') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->permaDistrict->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.perma_municipality') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->permaMunicipality->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.perma_ward_number') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->perma_ward_number ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.perma_tol') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->perma_tol ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="card-section">
                            <h3> {{ trans('global.contact.category.fields.temporary') }}</h3>
                            <div class="row g-3 mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.temp_province') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->tempProvince->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.temp_district') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->tempDistrict->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.temp_municipality') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->tempMunicipality->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.temp_ward_number') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->temp_ward_number ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.temp_tol') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->temp_tol ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="card-section">
                            <h3> {{ trans('global.contact.category.fields.contactPersonDetails') }}</h3>
                            <div class="row g-3 mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.contact_person_name') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->contact_person_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.contact_person_number') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->contact_person_number ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="card-section">
                            <h3> {{ trans('global.contact.category.fields.familyDetails') }}</h3>
                            <div class="row g-3 mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.father_name') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->father_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.father_country_id') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->fatherCountry->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.mother_name') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->mother_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.mother_country_id') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->motherCountry->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.grandfather_name') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->grandfather_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.grandfather_country_id') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->grandfatherCountry->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.spouse_name') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->spouse_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="name">
                                            {{ trans('global.contact.fields.spouse_country_id') }} :
                                        </label>
                                        <input type="text" id="name_en" name="name_en" class="form-control"
                                            value="{{ $user->contact->spouseCountry->title ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="step4">
                    <div class="p-2">
                        <div class="card-section">
                            <h3>{{ trans('global.education.title_singular') }}</h3>
                            <div class="row g-3 m-3">
                                @foreach ($user->educations as $education)
                                    <div class="col-12 custom-block">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="text-danger">
                                                    <b>
                                                        {{ $education->qualification->title }}
                                                    </b>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.education.fields.university_id') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $education->university->title ?? '' }}
                                                </p>
                                            </div>

                                            <div class="col">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.education.fields.institution') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $education->institution }}
                                                </p>
                                            </div>

                                            <div class="col">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.education.fields.division_id') }} /
                                                    {{ trans('global.education.fields.percentage') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $education->division->title ?? '' }} /
                                                    {{ $education->percentage ?? '' }}
                                                </p>
                                            </div>

                                            <div class="col">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.education.fields.pass_year') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $education->pass_year }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($education->media as $mediaItem)
                                                <div class="col-sm-6 col-md-4 col-lg-3">
                                                    <div class="media-item">
                                                        <a class="open-pdf-link" data-toggle="modal"
                                                            data-target="#pdfModal" href="{{ $mediaItem->short_url }}">
                                                            <i class="fas fa-file-pdf fa-3x text-primary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <p>{{ $mediaItem->mediaType->title }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="step5">
                    <div class="p-2">
                        <div class="card-section">
                            <h3>{{ trans('global.training.title_singular') }}</h3>
                            <div class="row g-3 m-3">
                                @foreach ($user->trainings as $training)
                                    <div class="col-12 custom-block">
                                        @if ($training->duration)
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <span class="text-success font-weight-bold">
                                                        Duration: <span class="text-lg">{{ $training->duration }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="text-danger">
                                                    <b>
                                                        {{ $training->subject }}
                                                    </b>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.training.fields.training_institute') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $training->training_institute ?? '' }}
                                                </p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.training.fields.training_from') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $training->training_from ?? '' }}
                                                </p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.training.fields.training_to') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $training->training_to ?? '' }}
                                                </p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.training.fields.percentage') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $training->percentage ?? '' }}
                                                </p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            @foreach ($training->media as $mediaItem)
                                                <div class="col-sm-6 col-md-4 col-lg-3">
                                                    <div class="media-item">
                                                        <a target="_blank" href="{{ $mediaItem->short_url }}">
                                                            <i class="fas fa-file-pdf fa-3x text-primary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <p>{{ $mediaItem->mediaType->title }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="step6">
                    <div class="p-2">
                        <div class="card-section">
                            <h3>{{ trans('global.experience.title_singular') }}</h3>
                            <div class="row g-3 m-3">
                                @foreach ($user->experiences as $experience)
                                    <div class="col-12 custom-block">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="text-danger">
                                                    <b>
                                                        {{ $experience->post }}
                                                    </b>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.recruitment_type_id') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->recruitmentType->title ?? '' }}
                                                </p>
                                            </div>

                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.level') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->level }}
                                                </p>
                                            </div>

                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.start_date') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->start_date ?? '' }}
                                                </p>
                                            </div>

                                            <div class="col-md-3">
                                                <p class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                                    {{ trans('global.experience.fields.end_date') }}
                                                </p>
                                                <p class="mt-0">
                                                    {{ $experience->end_date ?? '' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($experience->media as $mediaItem)
                                                <div class="col-sm-6 col-md-4 col-lg-3">
                                                    <div class="media-item">
                                                        <a target="_blank" href="{{ $mediaItem->short_url }}">
                                                            <i class="fas fa-file-pdf fa-3x text-primary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <p>{{ $mediaItem->mediaType->title }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="step7">
                    <div class="p-2">
                        <div class="card-section">
                            <h3>{{ trans('global.experience.title_singular') }}</h3>
                            <div class="row g-3 m-3">
                                <div class="upload-block">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="required" for="photo">
                                                {{ trans('global.personal.fields.photo') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-preview-container" style="float: right;">
                                            @if ($user->media->where('media_type_id', 1)->isNotEmpty())
                                                {!! $user->media->where('media_type_id', 1)->first() !!}
                                            @else
                                                <img id="img-upload"
                                                    style="max-width:100%; max-height:150px; margin-top:10px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="upload-block">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="required" for="photo">
                                                {{ trans('global.personal.fields.sign') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-preview-container" style="float: right;">
                                            @if ($user->media->where('media_type_id', 2)->isNotEmpty())
                                                {!! $user->media->where('media_type_id', 2)->first() !!}
                                            @else
                                                <img id="img-upload"
                                                    style="max-width:100%; max-height:150px; margin-top:10px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="upload-block">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="required" for="photo">
                                                {{ trans('global.personal.fields.citizenship_front') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-preview-container" style="float: right;">
                                            @if ($user->media->where('media_type_id', 3)->isNotEmpty())
                                                {!! $user->media->where('media_type_id', 3)->first() !!}
                                            @else
                                                <img id="img-upload"
                                                    style="max-width:100%; max-height:150px; margin-top:10px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="upload-block">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="required" for="photo">
                                                {{ trans('global.personal.fields.citizenship_back') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-preview-container" style="float: right;">
                                            @if ($user->media->where('media_type_id', 4)->isNotEmpty())
                                                {!! $user->media->where('media_type_id', 4)->first() !!}
                                            @else
                                                <img id="img-upload"
                                                    style="max-width:100%; max-height:150px; margin-top:10px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="upload-block">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="required" for="photo">
                                                {{ trans('global.personal.fields.samabeshi') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-preview-container" style="float: right;">
                                            @if ($user->media->where('media_type_id', 5)->isNotEmpty())
                                                {!! $user->media->where('media_type_id', 5)->first() !!}
                                            @else
                                                <img id="img-upload"
                                                    style="max-width:100%; max-height:150px; margin-top:10px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfIframe" src="" width="100%" height="600" frameborder="0"></iframe>
                </div>
            </div>
        </div>
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

        .custom-badge-lg {
            font-size: 18px;
            padding: 8px 12px;
            /* Add any other custom styles you desire */
        }

        .custom-block {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #05d1f5;
            border-radius: 5px;
            background-color: #f0eded;
        }

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
    <script>
        $(document).ready(function() {
            $('.open-pdf-link').click(function(e) {
                e.preventDefault();
                var pdfUrl = $(this).attr('href');
                $('#pdfIframe').attr('src', pdfUrl);
                $('#pdfModal').modal('show');
            });
        });
    </script>
@endsection
