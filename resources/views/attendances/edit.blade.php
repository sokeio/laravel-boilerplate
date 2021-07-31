@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>@lang('attendances.header.edit')</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($attendance, ['route' => ['attendances.update', $attendance->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('attendances.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit(__('attendances.button.update'), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('attendances.index') }}" class="btn btn-default">@lang('attendances.button.cancel')</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
