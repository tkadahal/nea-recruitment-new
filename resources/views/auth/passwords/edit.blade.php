@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.change_password') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('profile.password.update') }}">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('global.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email"
                    id="email" value="{{ old('email', auth()->user()->email) }}" required>
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('global.new') }} {{ trans('global.user.fields.password')
                    }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                    name="password" id="password" required>
                @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('global.user.fields.repeat_new_password') }}</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
                    required>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.submit') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection