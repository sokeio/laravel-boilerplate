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
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">@lang('auth.email.title')</p>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('password.email') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('auth.email.field.email')">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">@lang('auth.email.button.submit')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{ route("login") }}">@lang('auth.email.button.login')</a>
            </p>
            <p class="mb-0">
                <a href="{{ route("register") }}" class="text-center">@lang('auth.email.button.register')</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    @include('layouts.lang')
</div>
<!-- /.login-box -->
@endsection
