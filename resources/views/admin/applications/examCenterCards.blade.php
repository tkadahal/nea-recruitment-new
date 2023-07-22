@extends('layouts.admin')

@section('content')
    <a class="btn btn-primary no-print" href="{{ route('admin.printExamCards', $advertisementId) }}">
        Print Card Body
    </a>

    <div class="card mt-2">
        <div class="card-body" id="print-content">
            <!-- Add id attribute here -->
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
        {{ $payments->links('pagination::bootstrap-4') }}
    </div>
@endsection

@section('scripts')
    <script>
        function printCardBody() {
            // Get the card body element
            const cardBody = document.getElementById('print-content');

            // Clone the card body content to a new div element
            const printContent = cardBody.cloneNode(true);

            // Hide all non-card body elements on the page
            const otherElements = document.body.children;
            for (let i = 0; i < otherElements.length; i++) {
                if (otherElements[i] !== cardBody) {
                    otherElements[i].style.display = 'none';
                }
            }

            // Append the cloned card body content to the document body
            document.body.innerHTML = '';
            document.body.appendChild(printContent);

            // Trigger the browser's print functionality
            window.print();

            // Restore the original content after printing
            document.body.innerHTML = '';
            for (let i = 0; i < otherElements.length; i++) {
                document.body.appendChild(otherElements[i]);
            }
        }
    </script>
@endsection
