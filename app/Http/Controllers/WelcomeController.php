<?php namespace App\Http\Controllers;
// require_once('../app/Http/Controllers/BaseController.php');
class WelcomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Data = array(
			'title'=>'Home',
			);
		return $this->baseView('welcome',$Data);
	}

	//CONTACT PAGE
	public function contact()
	{
		return view('pages.contact');
	}

}
