<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/fileUploads.fields.id').':') !!}
    <p>{{ $fileUpload->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/fileUploads.fields.name').':') !!}
    <p>{{ $fileUpload->name }}</p>
</div>

<!-- File Upload Field -->
<div class="col-sm-12">
    {!! Form::label('file_upload', __('models/fileUploads.fields.file_upload').':') !!}
    <p>{{ $fileUpload->file_upload }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/fileUploads.fields.created_at').':') !!}
    <p>{{ $fileUpload->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/fileUploads.fields.updated_at').':') !!}
    <p>{{ $fileUpload->updated_at }}</p>
</div>

