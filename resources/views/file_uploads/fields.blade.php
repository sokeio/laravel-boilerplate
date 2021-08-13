<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/fileUploads.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- File Upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_upload', __('models/fileUploads.fields.file_upload').':') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('file_upload', ['class' => 'custom-file-input']) !!}
            {!! Form::label('file_upload', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
