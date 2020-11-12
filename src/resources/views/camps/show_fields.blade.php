
<!-- Title Field -->
<div class="form-group col-xs-12">
    <h1>{{ $camp->title }}</h1>
</div>
<!-- User Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('user_id', 'Author:') !!}
    <p>{{ $camp->user['name'] }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('category_id', 'Category') !!}
    <p><a href="/categories/{!! $camp->category['id'] !!}">{{ $camp->category['name'] }}</a></p>
</div>


<!-- Description Field -->
<div class="form-group col-md-6">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $camp->description !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group col-md-6">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $camp->photo }}</p>
</div>

<!-- Video Field -->
<div class="form-group col-md-6">
    {!! Form::label('video', 'Video:') !!}
    <p>{{ $camp->video }}</p>
</div>

<!-- Status Field -->
<div class="form-group col-md-6">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $camp->status }}</p>
</div>

<!-- What Will Student Learn Field -->
<div class="form-group col-md-6">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    <p>{!! $camp->what_will_student_learn !!}</p>
</div>

<!-- Age Group Field -->
<div class="form-group col-md-6">
    {!! Form::label('age_group', 'Age Group:') !!}
    <p>{{ $camp->age_group }}</p>
</div>

<!-- Capacity Field -->
<div class="form-group col-md-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    <p>{{ $camp->capacity }}</p>
</div>

<!-- Discount Price Field -->
<div class="form-group col-md-6">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    <p>{{ $camp->discount_price }}</p>
</div>

<!-- Standard Price Field -->
<div class="form-group col-md-6">
    {!! Form::label('standard_price', 'Standard Price:') !!}
    <p>{{ $camp->standard_price }}</p>
</div>

<!-- Subscriber Count Field -->
<div class="form-group col-md-6">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{{ $camp->subscriber_count }}</p>
</div>

<!-- Tags Field -->
<div class="form-group col-md-6">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $camp->tags }}</p>
</div>

