@extends ('layout')

{{-- setter tittle  --}}
@section ('title')
Profile
@stop

{{-- css   --}}
@section ('links_css')
@stop

{{-- content  --}}
@section ('content')

<h2>Profile</h2>
{{ Form::open(array('url' => 'users/create', 'method' => 'POST'), array('role' => 'form')) }}

  <div class="form-group">
  	{{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', null, array('placeholder' => 'First Name', 'class' => 'form-control')) }}
    
  </div>
  <div class="form-group">
  	{{ Form::label('last_name', 'Last Name') }}
    {{ Form::text('last_name', null, array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
  </div>
  <div class="form-group">
  
  	{{ Form::label('birth_date', 'Birth date') }}<br />
    <div class="col-sm-4">
    	{{ Form::selectRange('day_birth_date', 1, 31,null,array( 'class' => 'form-control')) }}
    </div>
    <div class="col-sm-4">
   		{{ Form::selectMonth('month_birth_date','month', array( 'class' => 'form-control')) }}
    </div>
    <div class="col-sm-4">
    	{{ Form::selectRange('day_birth_date', 1950, 2100,null,array( 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
       {{ Form::label('home_town_city_id', 'Home town') }}<br />
       <div class="col-sm-6">
        {{ Form::select('home_town_country_id', array(),null,array( 'class' => 'form-control')) }}
       </div>
       <div class="col-sm-6">
        {{ Form::select('home_town_city_id', array(),null,array( 'class' => 'form-control')) }}
       </div>
       </div>
        <div class="form-group">
       {{ Form::label('recidence_city_id', 'Recidence') }}<br />
       <div class="col-sm-6">
        {{ Form::select('recidence_country_id', array(),null,array( 'class' => 'form-control')) }}
       </div>
       <div class="col-sm-6">
        {{ Form::select('recidence_city_id', array(),null,array( 'class' => 'form-control')) }}
       </div>
   </div>
   <div class="form-group">
  	{{ Form::label('about_me', 'About me') }}
    {{ Form::textarea('about_me', null, array('placeholder' => 'About me ...', 'class' => 'form-control')) }}
   </div>
    <div class="form-group">
  	{{ Form::label('education_level_id', 'Education level') }}
    {{ Form::select('education_level_id',array(),null,array( 'class' => 'form-control')) }}
   </div>
   <div class="form-group">
  	{{ Form::label('eye_color', 'Eye color' ,array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::select('eye_color',array(),null,array( 'class' => 'form-control')) }}
   	</div>
    {{ Form::label('hair_color', 'Hair color' ,array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::select('hair_color',array(),null,array( 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('height', 'Height (meters)',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('height', null, array('placeholder' => '1.80', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('weigth', 'Weigth (lbs)',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('weigth', null, array('placeholder' => '125', 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('bust', 'Bust (cm)',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('bust', null, array('placeholder' => '70', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('middle', 'Waist (cm)',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('middle', null, array('placeholder' => '54', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
   	{{ Form::label('hip', 'Hip (cm)',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('hip', null, array('placeholder' => '77', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('shoe_id', 'shoe',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::select('shoe_id', array() ,null, array('placeholder' => '54', 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('twitter', 'Twitter',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('twitter', null, array('placeholder' => 'https://twitter.com/myuser', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('facebook', 'Facebook',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('facebook', null, array('placeholder' => 'https://www.facebook.com/my.user', 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('instagram', 'Instagram',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('instagram', null, array('placeholder' => 'http://instagram.com/myuser', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('youtube', 'Youtube',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('youtube' ,null, array('placeholder' => 'http://www.youtube.com/user/myuser', 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('pinterest', 'Pinterest',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('pinterest', null, array('placeholder' => 'https://www.pinterest.com/myuser', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('web_page', 'My web site',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('web_page' ,null, array('placeholder' => 'http://www.mywebsite.com', 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('manager_name', 'Manager Name',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('manager_name', null, array('placeholder' => 'Manager Name', 'class' => 'form-control')) }}
    </div>
    {{ Form::label('agence_name', 'Agence Name',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::text('agence_name' ,null, array('placeholder' => 'Agence Name', 'class' => 'form-control')) }}
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('phone', 'Phone',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-2">
    	{{ Form::text('phone', null, array('placeholder' => 'Phone', 'class' => 'form-control')) }}
    </div>
     <div class="col-sm-2 checkbox">
    	<label>{{ Form::checkbox('is_phone_public', '1') }}Public</label>
    </div>
    
    {{ Form::label('phone_2', 'Other phone',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-2">
    	{{ Form::text('phone_2' ,null, array('placeholder' => 'Other phone', 'class' => 'form-control')) }}
    </div>
     <div class="col-sm-2 checkbox">
    	<label>{{ Form::checkbox('is_phone2_public', '1') }}Public</label>
    </div>
   </div>
   <div class="form-group">
   	{{ Form::label('cellphone', 'Cellphone',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-2">
    	{{ Form::text('cellphone', null, array('placeholder' => 'Cellphone', 'class' => 'form-control')) }}
    </div>
    <div class="col-sm-2 checkbox">    	
    	<label>{{ Form::checkbox('is_cellphone_public', '1') }} Public</label>
    </div>
    {{ Form::label('contact_email', 'Contact E-mail',array( 'class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-4">
    	{{ Form::email('contact_email' ,null, array('placeholder' => 'Contact E-mail', 'class' => 'form-control')) }}
    </div>
   </div> 
   <div class="form-group">
   <div class="col-sm-10">
 	{{ Form::button('Create', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
    </div>
  </div> 
 
{{ Form::close() }}

{{-- css   --}}
@section ('links_js')

 <script type="application/javascript">
	$(function() {
	  
	});
</script>


@stop

@stop