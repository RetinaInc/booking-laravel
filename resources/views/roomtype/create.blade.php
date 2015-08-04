@extends('app')

@section('content')
<div class="container">
    <h1>Create Property Room Types</h1>

    <ul class="list-inline">
        <li>Basic</li>
        <li>Location</li>
        <li>Room Types</li>
        <li>Rooms</li>
        <li>Calendar</li>
        <li>Facilities</li>
        <li>Room Facilities</li>
    </ul>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::open(array('url' => 'property/room/type/'.$property_id )) !!}


    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name[0]', Input::old('name[0]'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <input type="button" value="Add Room Type" id="add" />
    </div>


    {!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

</div>

@endsection