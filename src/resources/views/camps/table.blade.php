<div class="table-responsive">
  <table class="table" id="camps-table">
      <thead>
      <tr>

      <th></th>
      <th></th>

      <th>Price</th>


              <th colspan="3">Action</th>
          </tr>
      </thead>
      <tbody>
      @if($camps) 
        @foreach($camps as $camp)
            <tr>
            <td>{{ $camp->photo }}</td>

            <td>
                <h2 class='no-text-style'>
                    <a href="{{ route('camps.show', [$camp->id]) }}" >
                        {{ $camp->title }}
                    </a>
                </h2>
                {{-- <div class="text-muted"> {{ $camp->user['name'] }} | {!! $camp->description !!} </div> --}}

                @if($camp->subscriber_count > 0)
                Enrolled : {{ number_format($camp->subscriber_count) }}
                @endif
            </td>



            <td>
            <h3 >${{ $camp->discount_price }}</h3>
            <strike>${{ $camp->standard_price }}</strike>
            </td>

                <td>
                @if (Auth::user()->role_id < 3 || $course->user_id)

                @endif
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
      @endif
      </tbody>
  </table>
</div>