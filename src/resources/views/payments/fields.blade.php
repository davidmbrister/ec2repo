<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Camp Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('camp_id', 'Camp Id:') !!}
    {!! Form::number('camp_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mode Of Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_of_payment', 'Mode Of Payment:') !!}
    {!! Form::text('mode_of_payment', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Payment Processor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_processor', 'Payment Processor:') !!}
    {!! Form::text('payment_processor', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payments.index') }}" class="btn btn-default">Cancel</a>
</div>
