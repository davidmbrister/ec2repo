<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Camp Categories</span></a>
</li>

<li class="{{ Request::is('campUsers*') ? 'active' : '' }}">
    <a href="{{ route('campUsers.index') }}"><i class="fa fa-edit"></i><span>My Subscriptions</span></a>
</li>

{{-- Moderator --}}
@if (Auth::user()->role_id < 4)
<li class="{{ Request::is('camps*') ? 'active' : '' }}">
    <a href="{{ route('camps.index') }}"><i class="fa fa-edit"></i><span>Camps</span></a>
</li>
@endif

{{-- Admin section --}}
@if (Auth::user()->role_id < 3)


<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Items</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>


@endif
<li class="{{ Request::is('coupons*') ? 'active' : '' }}">
    <a href="{{ route('coupons.index') }}"><i class="fa fa-edit"></i><span>Coupons</span></a>
</li>

