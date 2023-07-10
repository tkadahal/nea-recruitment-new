@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.tippani.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Latest Status
                    </th>
                    <td>
                        <span class="badge me-1 text-white"
                            style="background-color: {{ optional($tippani->tippaniApprovals->last())->status ? optional($tippani->tippaniApprovals->last())->status->color : '#F2A919' }}; color: #F2A919;">
                            {{ optional($tippani->tippaniApprovals->last())->status ?
                            optional($tippani->tippaniApprovals->last())->status->title : 'Pending' }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.tippani.fields.fiscal_year_id') }}
                    </th>
                    <td>
                        {{ $tippani->fiscalYear->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.tippani.fields.category_id') }}
                    </th>
                    <td>
                        {{ $tippani->category->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.tippani.fields.title') }}
                    </th>
                    <td>
                        {{ $tippani->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.tippani.fields.description') }}
                    </th>
                    <td>
                        {!! $tippani->description ?? '' !!}
                    </td>
                </tr>
                @if(count($tippani->media))
                <tr>
                    <th>
                        {{ trans('global.tippani.fields.document') }}
                    </th>
                    <td>
                        <table class="table table-full-width">
                            <thead>
                                <tr>
                                    <th>Tippani Document</th>
                                    <th>Tippani Supportives</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @foreach($tippani->media->where('media_type_id', 1) as $mediaItem)
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                {{ $loop->iteration }}. {!! $mediaItem !!}
                                                @if($mediaItem->is_modified == 1)
                                                <span class="text-danger">
                                                    (Modified at: {{ $mediaItem->updated_at}})
                                                </span>
                                                @endif
                                                <br>
                                                <span class="text-info">
                                                    Updated By: {{ $mediaItem->user->name }}
                                                </span>
                                            </li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($tippani->media->where('media_type_id', 2) as $mediaItem)
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                {{ $loop->iteration }}. {!! $mediaItem !!}
                                                @if($mediaItem->is_modified == 1)
                                                <span class="text-danger">
                                                    (Modified at: {{ $mediaItem->updated_at}})
                                                </span>
                                                @endif
                                            </li>
                                        </ul>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                @endif
                <tr>
                    <th>
                        {{ trans('global.tippani.fields.created_at') }}
                    </th>
                    <td>
                        {{ $tippani->created_at->diffForHumans() ?? '' }}
                    </td>
                </tr>
            </tbody>
        </table>

        @if(auth()->user()->office_id == $tippani->user->office->parent->ID)
        <h3 class="text-primary">
            Add Revised Tippani:
        </h3>
        <div class="card">
            <form class="form-horizontal" action="{{ route('admin.tippani.addRevised', $tippani->id) }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                <div class="card-body">


                    <div class="col">
                        <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                            <label class="required" for="document">
                                {{ trans('global.tippani.fields.document') }}
                            </label>
                            <input type="file" class="btn btn-default" id="document" name="document"
                                value="{{ old('document', isset($tippani) ? $tippani->document : '') }}"
                                style="display: block; border-color:#ccc">
                            @if ($errors->has('document'))
                            <p class="help-block">
                                {{ $errors->first('document') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.tippani.fields.document_helper') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="card-footer">
                    <input class=" btn btn-danger" type="submit">
                </div>

            </form>
        </div>
        @endif

        @if(count($tippani->tippaniApprovals))
        <h3 class="text-primary">
            Approval Flow For Tippani
        </h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sender Office Name</th>
                        <th>Receiver Office Name</th>
                        <th>Forwarded Date</th>
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tippani->tippaniApprovals as $index => $tippaniApproval)
                    <tr>
                        <td>
                            {{ $tippaniApproval->senderOffice->OFFICE_DESC ?? '' }}
                        </td>
                        <td>
                            {{ $tippaniApproval->approverOffice->OFFICE_DESC ?? '' }}
                        </td>
                        <td>
                            {{ $tippaniApproval->created_at ?? '' }}
                        </td>
                        <td>
                            <span class="badge me-1 text-white"
                                style="background-color: {{ $tippaniApproval->status ? $tippaniApproval->status->color : '#F2A919' }}">
                                {{ $tippaniApproval->status->title ?? 'Pending' }}
                            </span>
                        </td>
                        <td>
                            {!! $tippaniApproval->comment !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        <div class="form-group">
            <a class="btn btn-warning" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>

@endsection