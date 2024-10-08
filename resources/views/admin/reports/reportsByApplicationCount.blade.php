@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>
                Reports By Application Count
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
                                        <th>Advertisement Number</th>
                                        <th>Total</th>
                                        <th>Approved</th>
                                        <th>Rejected</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($block['entries'] as $entry)
                                        <tr>
                                            <td>{{ $entry['advertisementNumber'] }}</td>
                                            <td>{{ $entry['total'] }}</td>
                                            <td>{{ $entry['approved'] }}</td>
                                            <td>{{ $entry['rejected'] }}</td>
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
                    <h3>{!! $list_blocks[0]['title'] !!}</h3>
                    <canvas id="applicationCountChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let myChart; // Variable to hold the chart object

            function loadReportByAdvertisement() {
                // Get the chart data from the PHP array
                const chartData = @json($list_blocks[0]['entries']);

                // Extract data for Chart.js
                const labels = chartData.map(entry => entry.advertisementNumber);
                const datasetData = chartData.map(entry => entry.total);
                const backgroundColors = chartData.map(() => getRandomColor());

                // Chart.js configuration
                const chartConfig = {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: datasetData,
                            backgroundColor: backgroundColors,
                        }],
                    },
                    options: {
                        // Add any specific chart options here
                    },
                };

                // Destroy previous chart if exists
                if (myChart) {
                    myChart.destroy();
                }

                // Create new chart
                const ctx = document.getElementById('applicationCountChart').getContext('2d');
                myChart = new Chart(ctx, chartConfig);
            }

            // Call the function initially to render the default chart
            loadReportByAdvertisement();

            // Function to generate random colors for chart segments
            function getRandomColor() {
                return 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' +
                    Math.floor(Math.random() * 256) + ',1)';
            }
        });
    </script>

    {{-- <script>
        function loadReportByAdvertisement() {
            const advertisementNumber = document.getElementById('advertisement_number').value;
            const baseUrl = "{{ route('admin.getReportByPaymentVendors') }}";
            const url = new URL(baseUrl);
            url.searchParams.set('advertisement', advertisementNumber);
            window.location.href = url.toString();
        }
    </script> --}}
@endsection
