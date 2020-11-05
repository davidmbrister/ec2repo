<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $item->user_id }}</p>
</div>

<!-- Camp Id Field -->
<div class="form-group">
    {!! Form::label('camp_id', 'Camp Id:') !!}
    <p>{{ $item->camp_id }}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $item->url }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $item->description }}</p>
</div>

