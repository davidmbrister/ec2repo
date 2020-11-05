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

<!-- User Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    {!! Form::number('user_account_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    {!! Form::text('paid_date', null, ['class' => 'form-control','id'=>'paid_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#paid_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Paid Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_amount', 'Paid Amount:') !!}
    {!! Form::number('paid_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('campUsers.index') }}" class="btn btn-default">Cancel</a>
</div>
