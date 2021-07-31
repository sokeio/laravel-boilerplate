@extends('layouts.full')
@push('page_body_class')
hold-transition login-page
@endpush

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('home') }}"><b>{{ config('app.name') }}</b></a>
    </div>

    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">@lang('auth.login.title')</p>

            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="@lang('auth.login.field.email')" class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="@lang('auth.login.field.password')" class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

                <div class="row">
                    <div class="col">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">@lang('auth.login.field.remember')</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary btn-block">@lang('auth.login.button.submit')</button>
                    </div>

                </div>
            </form>

            <p class="mb-1">
                <a href="{{ route('password.request') }}">@lang('auth.login.button.reset-password')</a>
            </p>
            <p class="mb-1">
                <a href="{{ route('register') }}" class="text-center">@lang('auth.login.button.register')</a>
            </p>


        </div>
        <!-- /.login-card-body -->
    </div>
    @include('layouts.lang')
</div>
<!-- /.login-box -->
@endsection
