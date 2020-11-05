@if (Auth::user()->role_id < 3)
    <!-- Category Id Field -->
<div class="form-group col-sm-6">
  <div class="form-group">
  <label for="status">Status:</label>
  <select name = "status" class="form-control" id="status">
    
    @if ($camp != null)
    <option value="{{$camp->status}}"> 
      @if ($camp->status != 0)

        On
      @else
        Off
          
      @endif
    </option>
    @endif
    <option value="1"> On </option>
    <option value="0"> Off </option>
   
    
  </select>
</div>
</div>
@endif

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
  <div class="form-group">
  <label for="category_id">Category:</label>
  <select name = "category_id" class="form-control" id="category_id">
    
    @if ($camp != null)
        <option value="{{ $camp->category->id }}">{{$camp->category->name}}</option>
    @endif

    @foreach ($categories as $category)
         <option value="{{ $category->id }}">{{$category->name}}</option>
    @endforeach
   
    
  </select>
</div>
</div>



<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>



<!-- What Will Student Learn Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    {!! Form::textarea('what_will_student_learn', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_group', 'Age Group:') !!}
    {!! Form::text('age_group', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    {!! Form::number('discount_price', null, ['class' => 'form-control', 'step' => 'any']) !!}
</div>

<!-- Standard Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('standard_price', 'Standard Price:') !!}
    {!! Form::number('standard_price', null, ['class' => 'form-control', 'step' => 'any']) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('camps.index') }}" class="btn btn-default">Cancel</a>
</div>
