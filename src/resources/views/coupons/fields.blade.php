<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    {!! Form::number('user_account_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Available On Course Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('available_on_course_page', 'Available On Course Page:') !!}
    {!! Form::text('available_on_course_page', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Expiry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry', 'Expiry:') !!}
    {!! Form::text('expiry', null, ['class' => 'form-control','id'=>'expiry']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expiry').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Countdown Timer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('countdown_timer', 'Countdown Timer:') !!}
    {!! Form::number('countdown_timer', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_available', 'Total Available:') !!}
    {!! Form::number('total_available', null, ['class' => 'form-control']) !!}
</div>

<!-- Remaining Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remaining', 'Remaining:') !!}
    {!! Form::number('remaining', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('coupons.index') }}" class="btn btn-default">Cancel</a>
</div>
