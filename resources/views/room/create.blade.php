@extends('app')

@section('content')
<div class="container">
    <h1>Create Property Rooms</h1>

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

    {!! Form::open(array('url' => 'property/room/'.$property_id )) !!}


    <div class="form-group">
        {!! Form::label('type_id', 'Room Type') !!}
        {!! Form::select('type_id', App\RoomType::lists('name', 'id'), Input::old('type_id'), ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', Input::old('description'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_approved', 'Active') !!}
        {!! Form::text('is_approved', Input::old('is_approved'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

</div>

@endsection