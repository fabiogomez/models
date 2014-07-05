@extends ('layout')

{{-- setter tittle  --}}
@section ('title')
Create User
@stop

{{-- content  --}}
@section ('content')

{{ Form::open(array('url' => 'users/create', 'method' => 'POST'), array('role' => 'form')) }}

  <div class="form-group">
  	{{ Form::label('txtUserName', 'Username') }}
    {{ Form::text('txtUserName', null, array('placeholder' => 'Username', 'class' => 'form-control')) }}
    
  </div>
  <div class="form-group">
  	{{ Form::label('email', 'E-mail') }}
    {{ Form::text('email', null, array('placeholder' => 'E-mail', 'class' => 'form-control')) }}
  </div>
  <div class="form-group">
  	{{ Form::label('txtPassword', 'Password') }}
    {{ Form::password('txtPassword', array('placeholder' => 'Password', 'class' => 'form-control')) }}
  </div>
  <div class="form-group">
  	{{ Form::label('txtConfirmPassword', 'Confirm password') }}
    {{ Form::password('txtConfirmPassword', array('placeholder' => 'Confirm password', 'class' => 'form-control')) }}
   </div>
 
 	{{ Form::button('Create', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
    
{{ Form::close() }}


@stop