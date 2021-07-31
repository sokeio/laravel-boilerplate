@extends('layouts.full')
@push('page_body_class')
hold-transition login-page
@endpush

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('home') }}"><b>{{ config('app.name') }}</b></a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">@lang('auth.confirm.title')</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('auth.confirm.field.password')" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>


                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">@lang('auth.confirm.button.submit')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{ route('password.request') }}">@lang('auth.confirm.button.reset-password')</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    @include('layouts.lang')
</div>
<!-- /.login-box -->
@endsection
