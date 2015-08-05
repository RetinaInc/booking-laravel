@extends('app')

@section('breadcrumbs')
    @include('property.breadcrumbs', array('page' => 'location'))
@stop

@section('content')
<h1>Create Property Location</h1>
<!-- if there are creation errors, they will show here -->
{!! HTML::ul($errors->all()) !!}

{!! Form::open(array('url' => 'property/location' )) !!}


<div class="form-group">
    {!! Form::label('country_id', 'Property Country') !!}
    {!! Form::select('country_id', array('' => 'Please select country') + App\Country::lists('name', 'id'), Input::old('country_id'), ['class'=> 'form-control']) !!}
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
    {!! Form::label('city', 'City') !!}
    {!! Form::text('city', Input::old('city'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('zip_code', 'Postal Code') !!}
    {!! Form::text('zip_code', Input::old('zip_code'), array('class' => 'form-control')) !!}
</div>

{!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}


@endsection