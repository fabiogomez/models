<?php
class ProfileController extends BaseController {
	
	public $restful = true;
    /**
     * Show the profile for the given user.
     */
	public function __construct()
	{
		//parent::__construct();
		$this->beforeFilter('auth', array('except' => 'getLogin'));

		
	}
	
	public function getIndex()
	{
		$users = User::all();
		return View::make('user.list',array('users'=>$users));
	}
	public function getCreate()
	{
		
		return View::make('profile.create');
	}
	
	public function postCreate()
	{
		$user = new User();
		$user->user_name = Input::get('txtUserName');
		$user->email = Input::get('email');
		$user->password = Input::get('txtPassword');
		if($user->save())
		{
			return Redirect::to ('users');
		}//fin del if
		else 
		{
			return 'Ocurrio un error';
		}
		
		
		
	}
	 
    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make('user.profile', array('user' => $user));
    }

}
?>