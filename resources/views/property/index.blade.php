@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <a hre="{{ route('property.create') }}" class="btn btn-success">Create</a>
        <table width="100%">
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
</div>
@endsection
