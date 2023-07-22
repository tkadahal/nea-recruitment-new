<!-- pdf_template.blade.php -->
@foreach ($applications as $payment)
    <div class="card">
        <div>
            <h3 class="text-center">
                {{ $payment->application->advertisement->advertisement_num }}
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <p>Applicant ID: {{ $payment->application->user->applicant_id }}</p>
                    <p>Name: {{ $payment->application->user->name }}</p>
                    <p>Roll NO:</p>
                    <p>Advertisement Number: {{ $payment->application->advertisement->advertisement_num }}</p>
                    <p>Exam Center:</p>
                </div>
                <div class="col-4">
                    @if ($payment->application->user->media->where('media_type_id', 1)->isNotEmpty())
                        {!! $payment->application->user->media->where('media_type_id', 1)->first() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <hr style="border-color: black; border-style: solid;">
@endforeach
