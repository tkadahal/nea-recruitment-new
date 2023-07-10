@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.status.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.status.fields.title') }}
                    </th>
                    <td>
                        {{ $status->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.status.fields.color') }}
                    </th>
                    <td style="background-color:{{ $status->color ?? '#FFFFFF' }}"></td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.status.fields.created_at') }}
                    </th>
                    <td>
                        {{ $status->created_at->diffForHumans() ?? '' }}
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