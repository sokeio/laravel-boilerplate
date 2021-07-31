@extends('layouts.full')
@push('page_body_class')
hold-transition register-page
@endpush

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('home') }}"><b>{{ config('app.name') }}</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">@lang('auth.register.title')</p>

            <form method="post" action="{{ route('register') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="@lang('auth.register.field.fullname')">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('auth.register.field.email')">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('auth.register.field.password')">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="@lang('auth.register.field.password2')">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                @lang('auth.register.field.agreeTerms',['link'=>'#'])
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">@lang('auth.register.button.submit')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">@lang('auth.register.button.login')</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
    @include('layouts.lang')
</div>
<!-- /.register-box -->
@endsection
