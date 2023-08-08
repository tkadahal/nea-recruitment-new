@extends('layouts.admin')

@section('content')
    <a class="btn btn-primary no-print" href="{{ route('admin.printExamCards', $advertisementId) }}">
        Print Card Body
    </a>

    <div class="card mt-2">
        <div class="card-body" id="print-content">
            @php
                $counter = 1;
            @endphp
            @foreach ($payments as $payment)
                <div class="payment-box">
                    <div class="row">
                        <div class="col-8">
                            <p><b>Roll No:</b> {{ $counter }}</p>
                            <p><b>Applicant ID:</b> {{ $payment->application->user->applicant_id }}</p>
                            <p><b>Name (NP):</b> {{ $payment->application->user->name_np }}</p>
                            <p><b>Name (EN):</b> {{ $payment->application->user->name }}</p>
                            <p><b>Advertisement Number:</b> {{ $payment->application->advertisement->advertisement_num }}
                            </p>
                            <p><b>Exam Center:</b> <!-- Add exam center data here --></p>
                        </div>
                        <div class="col-4">
                            <div class="media-container">
                                @if ($payment->application->user->media->where('media_type_id', 1)->isNotEmpty())
                                    {!! $payment->application->user->media->where('media_type_id', 1)->first()->generateHtmlWithoutBorder() !!}
                                @endif
                                @if ($payment->application->user->media->where('media_type_id', 2)->isNotEmpty())
                                    {!! $payment->application->user->media->where('media_type_id', 2)->first()->generateHtmlWithoutBorder() !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $counter++;
                @endphp
            @endforeach
        </div>
        {{ $payments->links('pagination::bootstrap-4') }}
    </div>
@endsection

@section('styles')
    <style>
        .card-body {
            display: flex;
            flex-wrap: wrap;
        }

        .payment-box {
            border: 1px solid #ccc;
            padding: 10px;
            width: calc(50% - 20px);
            margin: 10px;
            box-sizing: border-box;
        }

        .media-container {
            max-width: 250px;
            margin: auto;
            text-align: right;
        }
    </style>
@endsection

@section('scripts')
    <script>
        function printCardBody() {
            const cardBody = document.getElementById('print-content');

            // Clone the cardBody element
            const printContent = cardBody.cloneNode(true);

            // Apply print-specific styles
            printContent.classList.add('print-friendly');

            // Create a new print window
            const printWindow = window.open('', '_blank');
            printWindow.document.open();

            // Append the cloned content to the print window's document
            printWindow.document.write(printContent.innerHTML);

            // Close the print window after printing
            printWindow.document.addEventListener('DOMContentLoaded', function() {
                printWindow.print();
                printWindow.close();
            });

            // Revert changes made to the main page's body
            for (let i = 0; i < otherElements.length; i++) {
                otherElements[i].style.display = '';
            }
        }
    </script>
@endsection
