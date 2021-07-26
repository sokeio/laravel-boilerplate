<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Present Field -->
<div class="form-group col-sm-6">
    {!! Form::label('present', 'Present:') !!}
    {!! Form::text('present', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
    {!! Form::text('day', null, ['class' => 'form-control']) !!}
</div>

<!-- Time In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_in', 'Time In:') !!}
    {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_out', 'Time Out:') !!}
    {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
</div>