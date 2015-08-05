@extends('app')

@section('breadcrumbs')
    @include('property.breadcrumbs')
@stop

@section('content')
    <h1>Edit Room Facilities</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::open(array('url' => 'property/facilities/'.$property_id )) !!}

    <table width="50%">
        @foreach($facilities as $facility)
            <tr class="form-group form-inline">
                <td>{!! Form::label('facility_id', $facility->name ) !!}</td>
                <td>
                    {!! Form::checkbox('facility['. $facility->id.']', Input::old('facility['.$facility->id.']'), false, ['class'=> 'form-control']) !!}
                </td>
            </tr>
        @endforeach
    </table>

    {!! Form::submit('Save Room Facilities', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}


@endsection