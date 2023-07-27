@extends('layouts.app')

@section('content')
    <div class="form-group mb-3">
        <a class="btn btn-warning" href="{{ route('personal') }}">
            Go Back
        </a>
    </div>

    <div class="wizard-box {{ request()->routeIs('support') ? 'active' : '' }}" id="support">

        <div class="card-section">
            <h3>
                {{ trans('global.support.title_singular') }}
            </h3>

            <div class="p-3">
                <form class="form-horizontal" action="{{ route('support.store', ['user_id' => auth()->id()]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <div class="input-group mb-3">
                            <button class="btn
                        btn-outline-danger" type="submit"
                                id="button-addon1">Submit</button>
                            <input type="text" class="form-control" placeholder="Place Your Queries Here"
                                aria-label="Example text with button addon" aria-describedby="button-addon1" id="title"
                                name="title">
                        </div>
                        @if ($errors->has('title'))
                            <p class="help-block">
                                {{ $errors->first('title') }}
                            </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.support.fields.title_helper') }}
                        </p>
                    </div>
                </form>
                <hr>
                <div class="row g-3">

                    <div class="accordion accordion-flush" id="supportQueries">

                        @foreach ($supports as $support)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $support->id }}" aria-expanded="true"
                                        aria-controls="flush-collapse{{ $support->id }}" style="background-color: #b3d2f3">
                                        {{ $support->title }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $support->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#supportQueries">
                                    <div class="accordion-body">
                                        {!! $support->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
