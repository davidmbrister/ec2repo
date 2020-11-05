<div class="table-responsive">
    <table class="table" id="campUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Camp Id</th>
        <th>User Account Id</th>
        <th>Paid Date</th>
        <th>Paid Amount</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($campUsers as $campUser)
            <tr>
                <td>{{ $campUser->user_id }}</td>
            <td>{{ $campUser->camp_id }}</td>
            <td>{{ $campUser->user_account_id }}</td>
            <td>{{ $campUser->paid_date }}</td>
            <td>{{ $campUser->paid_amount }}</td>
            <td>{{ $campUser->status }}</td>
                <td>
                    {!! Form::open(['route' => ['campUsers.destroy', $campUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('campUsers.show', [$campUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('campUsers.edit', [$campUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
