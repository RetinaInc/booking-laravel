@extends('app')

@section('breadcrumbs')
    @include('property.breadcrumbs')
@stop

@section('content')

    <h1>Create a Property</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::open(array('url' => 'property' )) !!}


    <div class="form-group">
        {!! Form::label('name', 'Property Type') !!}
        {!! Form::select('type_id', array('' => 'Please select type') + App\PropertyType::lists('name', 'id'), Input::old('type_id'), ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('introduction', 'Introduction.') !!}
        {!! Form::text('introduction', Input::old('introduction'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('website', 'Website.') !!}
        {!! Form::text('website', Input::old('website'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cancellation_policy', 'Cancellation Policy.') !!}
        {!! Form::textarea('cancellation_policy', Input::old('cancellation_policy'), array('class' => 'form-control')) !!}
    </div>


    <div class="form-group">
        {!! Form::label('full_description', 'Description.') !!}
        {!! Form::textarea('full_description', Input::old('full_description'), array('class' => 'form-control')) !!}
    </div>


    <div class="form-group">
        {!! Form::label('is_published', 'Activate') !!}
        {!! Form::checkbox('is_published', Input::old('is_published'), array('class' => 'form-control')) !!}
    </div>


    {!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

</div>

@endsection