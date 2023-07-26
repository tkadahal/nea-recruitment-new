@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <div class="card-body {{ request()->routeIs('application.*') ? 'active' : '' }}" id="application">
        <div class="row g-3 m-1 pb-2 justify-content-end">
            <div class="col-md-4">
                <div class="form-group">
                    <select name="category" id="category" class="form-control select2">
                        <option value="" selected="selected">
                            {{ trans('global.pleaseSelect') }}
                        </option>
                        <option value="0">
                            {{ trans('global.application.dropdowns.officer') }}
                        </option>
                        <option value="1">
                            {{ trans('global.application.dropdowns.assistant') }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4" id="examCenterContainer">
                <div class="form-group">
                    <select name="examCenter" id="examCenter" class="form-control select2">
                        @foreach ($examCenters as $id => $examCenter)
                            <option value="{{ $id }}">
                                {{ $examCenter }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="wizard-box">
            @if (count($advertisements))
                <div class="card-section">
                    <div class="p-3">
                        <div class="row">
                            <div class="col">
                                @include('user.applications.nav.application')
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .application-block {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .application-block .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .application-block .row>div {
            flex: 1;
        }

        .application-block .row h5 {
            flex: 1;
            text-align: center;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {
                var typeValue = $(this).val();
                var examCenterDropdown = $('#examCenter');

                examCenterDropdown.val('').prop('disabled', true);

                if (typeValue === '1') {
                    examCenterDropdown.prop('disabled', false);
                }

                loadApplications();
            });

            function loadApplications() {
                var category = $('#category').val();
                var examCenter = $('#examCenter').val();

                $.ajax({
                    url: "{{ route('load.applications') }}",
                    method: "GET",
                    data: {
                        category: category,
                        examCenter: examCenter,
                    },
                    success: function(data) {
                        $('#advertisement-container').html(data);
                        isContentLoaded = true;
                    },
                    error: function() {
                        alert('Failed to load applications.');
                    }
                });
            }

            $(document).on('change', '#examCenter', function() {
                loadApplications();
            });
        });
    </script>
@endsection
