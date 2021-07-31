@extends('layouts.full')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7" style="margin-top: 2%">
            <div class="box">
                <h3 class="box-title" style="padding: 2%">@lang('auth.verify.title')</h3>

                <div class="box-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        @lang('auth.verify.message.resent')
                    </div>
                    @endif
                    <p>@lang('auth.verify.message.info')</p>
                    <a href="{{ route('verification.resend') }}">@lang('auth.verify.button.request-new')</a>.
                </div>
            </div>
        </div>
    </div>
    @include('layouts.lang')
</div>
@endsection
