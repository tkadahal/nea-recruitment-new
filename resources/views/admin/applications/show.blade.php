@extends('layouts.admin')

@section('content')
    <div class="form-group">
        <a class="btn btn-warning" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>

    <div class="card">

        <div class="card-body">
            <div class="row">
                @foreach ($advertisements as $advertisement)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <div class="fw-bold fs-4 mb-3">
                                    {{ $advertisement->advertisement_num ?? 'Untitled Advertisement' }}
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="mb-3">
                                        <span class="fw-bold">Total Applications:</span>
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_total']) }}"
                                            class="text-white">
                                            {{ $advertisement->total_payments ?? '0' }}
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <span class="fw-bold">Total Checked:</span>
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_checked']) }}"
                                            class="text-white">
                                            {{ $advertisement->total_checked ?? '0' }}
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <span class="fw-bold">Total Approved:</span>
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_approved']) }}"
                                            class="text-white">
                                            {{ $advertisement->total_approved ?? '0' }}
                                        </a>
                                    </div>
                                    <div>
                                        <span class="fw-bold">Total Rejected:</span>
                                        <a href="{{ route('admin.application.viewApplication', ['id' => $advertisement->id, 'action' => '_rejected']) }}"
                                            class="text-white">
                                            {{ $advertisement->total_rejected ?? '0' }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
