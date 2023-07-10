@extends('layouts.app')

@section('content')

<style>
    .experience-block {
        display: flex;
        width: 100%;
        background-color: #f8fafc;
        border: 1px solid #ced4da;
        padding: 0.75rem 2rem;
        border-radius: 4px;
        margin-bottom: 0.7rem;
    }

    .column {
        flex: 1;
    }

    .form-group h5 {
        margin-top: 0;
        margin-bottom: 10px;
        padding-bottom: 5px;
        /* border-bottom: 1px solid #ccc; */
    }
</style>

<div class="card" id="experienceDetails" style="background-color: #ffffff">

    <div class="card-body mb-3 pb-3">
        <a href="{{ route('experienceDetail.create') }}" class="btn btn-block btn-outline-success">
            <label style="font-size: 18px">
                {{ trans('global.add') }} {{ trans('global.experienceInfo.title_singular') }}
            </label>
        </a>
    </div>

    <div class="card-body">
        @if(count($experienceDetails))
        <div class="card-section">
            <h3>
                {{ trans('global.experienceInfo.title_singular') }}
            </h3>

            <div class="p-3">
                @foreach($experienceDetails as $key => $experience)
                <div class="form-row">
                    <div class="experience-block">
                        <div class="column">
                            <div class="form-group">
                                <u>
                                    <h5 class="text-danger">{{ $experience->post ?? '' }}</h5>
                                </u>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.experienceInfo.fields.office') }} :
                                    </span>
                                    <span class="text">
                                        {{ $experience->office ?? '' }}
                                    </span>
                                </h5>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.experienceInfo.fields.level') }} :
                                    </span>
                                    <span class="text">
                                        {{ $experience->level ?? '' }}
                                    </span>
                                </h5>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.experienceInfo.fields.recruitment_type') }} :
                                    </span>
                                    <span class="text">
                                        {{ $experience->recruitment_type ?? '' }}
                                    </span>
                                </h5>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.experienceInfo.fields.start_date') }} :
                                    </span>
                                    <span class="text">
                                        {{ $experience->start_date ?? '' }}
                                    </span>
                                </h5>
                                <h5 class="mb-2 pb-2">
                                    <span class="label text-primary">
                                        {{ trans('global.experienceInfo.fields.end_date') }} :
                                    </span>
                                    <span class="text">
                                        {{ $experience->end_date ?? '' }}
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-group pull-right">
                                <a href="{{ route('experienceInfo.edit', $experience->id) }}"
                                    class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('experienceInfo.destroy', $experience->id) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        {{ trans('global.delete') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <a class="btn btn-secondary" href="{{ route('trainingDetail.index') }}">
                    Go Back
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="">
                    Save & Next
                </a>
            </div>
        </div>
    </div>
</div>
@endsection