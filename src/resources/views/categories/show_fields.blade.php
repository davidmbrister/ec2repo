
<!-- Description Field -->
<div class="form-group w-100">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>

<!-- Created at Field -->
<div class="form-group w-100">
    {!! Form::label('created_at', 'Created at:') !!}
    <p>{{ $category->created_at->format('g:i a D, M Y ') }}</p>
</div>

<!-- Updated at Field -->
<div class="form-group w-100"> 
    {!! Form::label('updated_at', 'Updated at:') !!}
    <p>{{ $category->updated_at->format('g:i a D, M Y ') }}</p>
</div>

