<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $comment->user_id }}</p>
</div>

<!-- Camp Id Field -->
<div class="form-group">
    {!! Form::label('camp_id', 'Camp Id:') !!}
    <p>{{ $comment->camp_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $comment->category_id }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $comment->body }}</p>
</div>

