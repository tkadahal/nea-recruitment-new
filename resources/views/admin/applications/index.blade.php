@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong> </strong> मा परेका आबेदनका सूचीहरु

        </div>

        <div class="card-body">
            <div class="row">
                @foreach ($applications as $application)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card text-white bg-primary">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <a href="{{ route('admin.application.show', $application->id) }}"
                                        style="color: white; text-decoration: none;">
                                        {{ $application->title ?? 'Untitled Application' }}
                                    </a>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text fs-6">
                                    Total Advertisements:
                                    {{ $application->advertisements_count ?? '0' }}
                                </p>                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
