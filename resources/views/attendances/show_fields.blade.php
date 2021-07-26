<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $attendance->id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $attendance->user_id }}</p>
</div>

<!-- Present Field -->
<div class="col-sm-12">
    {!! Form::label('present', 'Present:') !!}
    <p>{{ $attendance->present }}</p>
</div>

<!-- Day Field -->
<div class="col-sm-12">
    {!! Form::label('day', 'Day:') !!}
    <p>{{ $attendance->day }}</p>
</div>

<!-- Time In Field -->
<div class="col-sm-12">
    {!! Form::label('time_in', 'Time In:') !!}
    <p>{{ $attendance->time_in }}</p>
</div>

<!-- Time Out Field -->
<div class="col-sm-12">
    {!! Form::label('time_out', 'Time Out:') !!}
    <p>{{ $attendance->time_out }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $attendance->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $attendance->updated_at }}</p>
</div>

