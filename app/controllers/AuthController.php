<?php
class AuthController extends BaseController {
	public $restful = true;
    /**
     * Show the profile for the given user.
     */
	
	public function getLogin()
	{		
		return View::make('auth.login');
	}
	public function postLogin()
	{		
		
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
		);
		
		if(Auth::attempt($credentials)){
			return "Ok";
			
		}//end if
		else{
			
			return Redirect::back()->withInput();
		}
		
	}// end function


}
?>