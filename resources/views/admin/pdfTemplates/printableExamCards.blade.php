@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            @foreach ($payments as $payment)
                <div class="row">
                    <div class="col-10">
                        <p>
                            <b>
                                Applicant ID:
                            </b>
                            {{ $payment->application->user->applicant_id }}
                        </p>
                        <p>
                            <b>
                                Name:
                            </b>
                            {{ $payment->application->user->name_np }} ({{ $payment->application->user->name }})
                        </p>
                        <p>
                            <b>
                                Roll NO:
                            </b>
                        </p>
                        <p>
                            <b>
                                Advertisement Number:
                            </b>
                            {{ $payment->application->advertisement->advertisement_num }}
                        </p>
                        <p>
                            <b>
                                Exam Center:
                            </b>
                        </p>
                    </div>
                    <div class="col-2">
                        @if ($payment->application->user->media->where('media_type_id', 1)->isNotEmpty())
                            {!! $payment->application->user->media->where('media_type_id', 1)->first() !!}
                        @endif
                    </div>
                </div>
                <hr style="border-color: black; border-style: solid;">
            @endforeach
        </div>
    </div>
@endsection
