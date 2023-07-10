@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>
            {{ trans('global.reportByFiscalYear.title_singular') }}
        </strong>
        {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                @foreach ($list_blocks as $block)
                <h3>{{ $block['title'] }}</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ trans('global.reportByFiscalYear.fields.fiscalYear') }}</th>
                                <th>{{ trans('global.reportByFiscalYear.fields.count') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($block['entries'] as $entry)
                            <tr>
                                <td>{{ $entry->fiscalYear->title }}</td>
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
                <div class="{{ $tippani_by_fiscalYear->options['column_class'] }}">
                    <h3>{!! $tippani_by_fiscalYear->options['chart_title'] !!}</h3>
                    {!! $tippani_by_fiscalYear->renderHtml() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
{!! $tippani_by_fiscalYear->renderJs() !!}
@endsection