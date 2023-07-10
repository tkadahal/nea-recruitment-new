@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.applicationFee.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.title') }}
                    </th>
                    <td>
                        {{ $applicationFee->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.open') }}
                    </th>
                    <td>
                        {{ $applicationFee->open ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.female') }}
                    </th>
                    <td>
                        {{ $applicationFee->female ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.janajati') }}
                    </th>
                    <td>
                        {{ $applicationFee->janajati ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.madhesi') }}
                    </th>
                    <td>
                        {{ $applicationFee->madhesi ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.dalit') }}
                    </th>
                    <td>
                        {{ $applicationFee->dalit ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.disabled') }}
                    </th>
                    <td>
                        {{ $applicationFee->disabled ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.rural') }}
                    </th>
                    <td>
                        {{ $applicationFee->rural ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.applicationFee.fields.created_at') }}
                    </th>
                    <td>
                        {{ $applicationFee->created_at->diffForHumans() ?? '' }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <a class="btn btn-warning" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>

@endsection