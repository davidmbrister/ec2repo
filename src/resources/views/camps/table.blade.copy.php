<div class="table-responsive">
    <table class="table" id="camps-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Category Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Video</th>
        <th>Status</th>
        <th>What Will Student Learn</th>
        <th>Age Group</th>
        <th>Capacity</th>
        <th>Discount Price</th>
        <th>Standard Price</th>
        <th>Subscriber Count</th>
        <th>Tags</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($camps as $camp)
            <tr>
                <td>{{ $camp->user_id }}</td>
            <td>{{ $camp->category_id }}</td>
            <td>{{ $camp->title }}</td>
            <td>{{ $camp->description }}</td>
            <td>{{ $camp->photo }}</td>
            <td>{{ $camp->video }}</td>
            <td>{{ $camp->status }}</td>
            <td>{{ $camp->what_will_student_learn }}</td>
            <td>{{ $camp->age_group }}</td>
            <td>{{ $camp->capacity }}</td>
            <td>{{ $camp->discount_price }}</td>
            <td>{{ $camp->standard_price }}</td>
            <td>{{ $camp->subscriber_count }}</td>
            <td>{{ $camp->tags }}</td>
                <td>
                    {!! Form::open(['route' => ['camps.destroy', $camp->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('camps.show', [$camp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('camps.edit', [$camp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
