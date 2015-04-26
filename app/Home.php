<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Home extends Model {

	public function getSomething()
	{
		if(!isset($_SESSION['ingredients']))
		{
			$_SESSION['ingredients'] = array();
		}
		if($_SESSION['ingredients'][] = Input::get('add'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}
