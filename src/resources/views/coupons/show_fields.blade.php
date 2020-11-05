<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $coupon->user_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $coupon->category_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="form-group">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    <p>{{ $coupon->user_account_id }}</p>
</div>

<!-- Available On Course Page Field -->
<div class="form-group">
    {!! Form::label('available_on_course_page', 'Available On Course Page:') !!}
    <p>{{ $coupon->available_on_course_page }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $coupon->type }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $coupon->price }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $coupon->status }}</p>
</div>

<!-- Expiry Field -->
<div class="form-group">
    {!! Form::label('expiry', 'Expiry:') !!}
    <p>{{ $coupon->expiry }}</p>
</div>

<!-- Countdown Timer Field -->
<div class="form-group">
    {!! Form::label('countdown_timer', 'Countdown Timer:') !!}
    <p>{{ $coupon->countdown_timer }}</p>
</div>

<!-- Total Available Field -->
<div class="form-group">
    {!! Form::label('total_available', 'Total Available:') !!}
    <p>{{ $coupon->total_available }}</p>
</div>

<!-- Remaining Field -->
<div class="form-group">
    {!! Form::label('remaining', 'Remaining:') !!}
    <p>{{ $coupon->remaining }}</p>
</div>

