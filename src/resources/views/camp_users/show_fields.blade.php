<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $campUser->user_id }}</p>
</div>

<!-- Camp Id Field -->
<div class="form-group">
    {!! Form::label('camp_id', 'Camp Id:') !!}
    <p>{{ $campUser->camp_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="form-group">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    <p>{{ $campUser->user_account_id }}</p>
</div>

<!-- Paid Date Field -->
<div class="form-group">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    <p>{{ $campUser->paid_date }}</p>
</div>

<!-- Paid Amount Field -->
<div class="form-group">
    {!! Form::label('paid_amount', 'Paid Amount:') !!}
    <p>{{ $campUser->paid_amount }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $campUser->status }}</p>
</div>

