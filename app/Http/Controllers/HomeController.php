<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Session;

class HomeController extends Controller
{

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// TODO: find out about middleware
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'title' => 'Oma Ruokakaappi',
			'description' => 'Oma Ruokakaappi. Katso mitä ruokaa voit tehdä ruokakaappisi sisällöstä.',
			'company' => 'Ruokakaappi',
			'h1' => 'Oma Ruokakaappi',
			'ingredients' => Session::get('ingredients')
		];

		return view('kaappi', $data);
	}

	public function add()
	{
		$input = Input::all();
		$output = "";
		Session::push('ingredients', $input['add']);

		foreach (Session::get('ingredients') as $name) {
			$output .= '<div onclick="addIng(\'' . $name . '\',\'remove\')" class="list-group-item list-group-item-success"><span class="pull-right glyphicon glyphicon-minus"></span> ' . $name . "</div>\n";
		}
		return $output;
	}

	public function reset()
	{
		Session::forget('ingredients');
		return "";
	}

}
