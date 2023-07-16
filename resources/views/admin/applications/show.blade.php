@extends('layouts.admin')

@section('content')
    <div class="form-group">
        <a class="btn btn-warning" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>

    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i>
            {{ trans('global.show') }} <strong> {{ trans('global.applicationFee.title_singular') }}</strong>
        </div>

        <div class="card-body">
            <div class="row">
                @foreach ($advertisements as $advertisement)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-primary">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">

                                        {{ $advertisement->advertisement_num ?? '' }}

                                    </div>
                                    <div class="pt-4 fs-4">
                                        Total Applications:
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_total']) }}"
                                            style="color: white;">
                                            {{ $advertisement->total_payments ?? '0' }}
                                        </a>
                                        <hr>
                                        Total Checked:
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_checked']) }}"
                                            style="color: white;">
                                            {{ $advertisement->total_checked ?? '0' }}
                                        </a>
                                        <hr>
                                        Total Approved:
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_approved']) }}"
                                            style="color: white;">
                                            {{ $advertisement->total_approved ?? '0' }}
                                        </a>
                                        <hr>
                                        Total Rejected:
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_rejected']) }}"
                                            style="color: white;">
                                            {{ $advertisement->total_rejected ?? '0' }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#personalDetail">Personal Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Education Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Training Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Experience Details</a>
            </li>
        </ul>

        <div class="UserDetails" style="margin-top: 25px">
            <div class="card-body" id="personalDeatil" style="border: 1px solid blue">
                <div class="row g-3">
                    <div class="col-md-6 form-group">
                        Applied Samabeshi Groups:
                        @foreach ($application->samabeshiGroups as $key => $item)
                        <span class=" badge badge-info">
                            {{ $item->title }}
                        </span>
                        @endforeach
                    </div>
                    <div class="col-md-6 form-group">

                    </div>
                </div>
                <div class="col-md-6 form-group">
                    Applicant Name (EN): {{ $user->name }}
                </div>
                <div class="col-md-6 form-group">
                    Applicant Name (NP): {{ $user->name_np }}
                </div>
            </div>
        </div> --}}
        </div>
    </div>
@endsection
