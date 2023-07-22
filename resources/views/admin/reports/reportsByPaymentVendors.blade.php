@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>
            Reports By Payment Vendors
        </strong>
        {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="col-md-3">
            <label for="advertisement_number">Select Advertisement Number:</label>
            <select class="form-control" id="advertisement_number" onchange="loadReportByAdvertisement()">
                <option value="">All Advertisements</option>
                @foreach ($advertisements as $advertisement)
                <option value="{{ $advertisement->id }}">{{ $advertisement->advertisement_num }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col">
                @foreach ($list_blocks as $block)
                <h3>{{ $block['title'] }}</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Payment Vendor</th>
                                <th>Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($block['entries'] as $entry)
                            <tr>
                                <td>{{ $entry->payment_gateway }}</td>
                                <td>{{ $entry->total }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">{{ __('No entries found') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @endforeach
            </div>

            <div class="col text-right">
                <div class="{{ $report_by_payment_vendors->options['column_class'] }}">
                    <h3>{!! $report_by_payment_vendors->options['chart_title'] !!}</h3>
                    {!! $report_by_payment_vendors->renderHtml() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
{!! $report_by_payment_vendors->renderJs() !!}
@endsection
