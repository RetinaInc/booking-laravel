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
               <th></th>
           </tr>
        </thead>
        <tbody>
            @if(count($properties) > 0)
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->title }}</td>
                        <td>{{ $property->type->name }}</td>
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


                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('property/' . $property->id . '/edit') }}">Edit</a>

                            <a class="btn btn-small btn-default" href="{{ URL::to('property/room/type/' . $property->id) }}">Room Types</a>

                            <a class="btn btn-small btn-primary" href="{{ URL::to('property/room/' . $property->id) }}">Rooms</a>

                            <a class="btn btn-small btn-warning" href="{{ URL::to('property/facilities/' . $property->id) }}">Facilities</a>


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
