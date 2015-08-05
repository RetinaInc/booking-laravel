@extends('app')

@section('breadcrumbs')
    @include('property.breadcrumbs')
@stop

@section('content')
<h1>Create Property Rooms</h1>

<!-- if there are creation errors, they will show here -->
{!! HTML::ul($errors->all()) !!}

{!! Form::open(array('url' => 'property/room/'.$property_id )) !!}


<div class="form-group">
    {!! Form::label('type_id', 'Room Type') !!}
    {!! Form::select('type_id', array('' => 'Please select type') + $room_types, Input::old('type_id'), ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', Input::old('description'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('is_approved', 'Active') !!}
    {!! Form::checkbox('is_approved', Input::old('is_approved'), array('class' => 'form-control')) !!}
</div>

{!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}


@endsection