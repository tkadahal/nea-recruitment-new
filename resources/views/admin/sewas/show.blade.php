@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.sewa.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.sewa.fields.title') }}
                    </th>
                    <td>
                        {{ $sewa->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sewa.fields.created_at') }}
                    </th>
                    <td>
                        {{ $sewa->created_at->diffForHumans() ?? '' }}
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