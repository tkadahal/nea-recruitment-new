@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-body">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    @foreach ($number_blocks as $block)
                    <div class="col-6 col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="bg-danger text-white p-4 me-3">
                                    <span class="info-box-icon bg-red"
                                        style="display:flex; flex-direction: column; justify-content: center;">
                                        <i class="fa fa-chart-line fa-2x"></i>
                                    </span>
                                </div>
                                <div style="padding-left: 5px;">
                                    <div class="fs-6 fw-semibold text-primary">{{ $block['title'] }}</div>
                                    <div class="text-medium-emphasis text-uppercase fw-semibold">{{ $block['number'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    @foreach ($list_blocks as $block)
                    <div class="col-md-6">
                        <h3>{{ $block['title'] }}</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Last login at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($block['entries'] as $entry)
                                    <tr>
                                        <td>{{ $entry->name }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>
                                            @if(Cache::has('user-is-online-' . $entry->id))
                                            <span class="text-success">Online</span>
                                            @else
                                            <span class="text-secondary">Offline</span>
                                            @endif
                                        </td>
                                        <td>{{ $entry->last_login_at }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">{{ __('No entries found') }}</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="{{ $chart->options['column_class'] }}">
                        <h3>{!! $chart->options['chart_title'] !!}</h3>
                        {!! $chart->renderHtml() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
{!! $chart->renderJs() !!}
@endsection