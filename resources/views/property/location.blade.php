@extends('app')

@section('content')
<div class="container">
    <h1>Create Property Location</h1>

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

    {!! Form::open(array('url' => 'property/location' )) !!}


    <div class="form-group">
        {!! Form::label('country_id', 'Property Country') !!}
        {!! Form::select('country_id', App\Country::lists('name', 'id'), Input::old('country_id'), ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address_line_1', 'Address Line 1') !!}
        {!! Form::text('address_line_1', Input::old('address_line_1'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address_line_2', 'Address Line 2') !!}
        {!! Form::text('address_line_2', Input::old('address_line_2'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address_line_3', 'Address Line 3') !!}
        {!! Form::text('address_line_3', Input::old('address_line_3'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('zip_code', 'Postal Code') !!}
        {!! Form::text('zip_code', Input::old('zip_code'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

</div>

@endsection