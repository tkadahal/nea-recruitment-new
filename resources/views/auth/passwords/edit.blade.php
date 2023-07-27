@extends('layouts.app')
@section('content')
    <div class="card-body {{ request()->routeIs('personal') ? 'active' : '' }}" id="personal">
        <form class="wizard-box" method="POST" action="{{ route('profile.password.update') }}">
            @csrf
            <div class="card-section">
                <h3>
                    {{ trans('global.change_password') }}
                </h3>
                <div class="p3">
                    <div class="row g-3 m-3">
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('global.user.fields.email') }}</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text"
                                name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('global.new') }}
                                {{ trans('global.user.fields.password') }}</label>
                            <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                name="password" id="password" required>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="title">{{ trans('global.user.fields.repeat_new_password') }}</label>
                            <input class="form-control" type="password" name="password_confirmation"
                                id="password_confirmation" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-secondary" href="{{ route('personal') }}">
                        Go Back
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>
            {{-- <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Submit
                </button>
            </div> --}}
        </form>
    </div>
@endsection
