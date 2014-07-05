<?php

class Profile extends Eloquent {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';
	
	public function profile()
	{
		return $this->hasOne('User');
		
	}//end function

}
