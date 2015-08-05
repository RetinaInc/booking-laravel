@extends('app')

@section('breadcrumbs')
    @include('property.breadcrumbs')
@stop

@section('content')
<h1>Create Property Room Types</h1>

<!-- if there are creation errors, they will show here -->
{!! HTML::ul($errors->all()) !!}

{!! Form::open(array('url' => 'property/room/type/'.$property_id )) !!}


<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name[0]', Input::old('name[0]'), array('class' => 'form-control')) !!}
</div>

<div class="form-group" id="add-more">
    <input type="button" value="Add Room Type" id="add" />
</div>


{!! Form::submit('Save and Next', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

<script>
    jQuery(function(){
       var counter = 1;
       jQuery("#add").click(function(){
          counter++;
          var html = [];
          html.push("<div class='form-group'>");
            html.push("<label>Name</label>")
            html.push("<input type='text' class='form-control' value='' name='name["+counter+"]' />");
          html.push("</div>");
          jQuery("#add-more").before(html.join(''));
       });
    });
</script>

@endsection