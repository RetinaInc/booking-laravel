@extends('app')
@section('content')
<div class="row">
    <a href="{{ route('property.create') }}" class="btn btn-success text-right">Create</a>
    <br />
    <br />
    <table width="100%" class="table table-striped table-bordered">
        <thead>
           <tr>
               <th>Name</th>
               <th>Type</th>
               <th></th>
           </tr>
        </thead>
        <tbody>
            @if(count($properties) > 0)
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->name }}</td>
                        <td>{{ $property->type()->name }}</td>
                        <td>
                            @if($property->is_active)
                              <span class="label label-success">Active</span>
                            @else
                              <span class="label label-danger">Closed</span>
                            @endif
                        </td>
                        <td>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            @if($property->userIsMember($property->id))
                                <a class="btn btn-small btn-danger" href="{{ URL::to('property/exit/' . $stokvel->id ) }}">Exit</a>
                            @else
                            <a class="btn btn-small btn-success" href="{{ URL::to('property/join/' . $stokvel->id) }}">Join</a>
                            @endif


                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-default" href="{{ URL::to('property/invite/' . $property->id) }}">Invite</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('property/' . $property->id . '/edit') }}">Edit</a>


                            <a class="btn btn-small btn-warning" href="{{ URL::to('paymentorder/' . $property->id . '') }}">Generate Payment Order</a>


                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">There are no properties</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
