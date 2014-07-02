@extends ('layout')

{{-- setter tittle  --}}
@section ('title')
login
@stop

{{-- content  --}}
@section ('content')

{{ Form::open(array('url' => 'login', 'method' => 'POST'), array('role' => 'form')) }}

  <div class="form-group">
  	{{ Form::label('email', 'E-mail') }}
    {{ Form::text('email',null, array('placeholder' => 'E-mail','class' => 'form-control')) }}
    
  </div>
  <div class="form-group">
  	{{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
  </div>
 
 
 	{{ Form::button('Sing in', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
    
{{ Form::close() }}


@stop