<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EntryController extends Controller {

	public function getIndex()
	{
		return view('inscriere');
	}

	public function handleProviderCallback()
	{
	    $user = Socialize::with('facebook')->user();

	    // $user->token;
	    // OAuth Two Providers
		$token = $user->token;

		// All Providers
		$user->getId();
		$user->getNickname();
		$user->getName();
		$user->getEmail();
	}

	public function getLogin()
	{
		return Socialize::with('facebook')->redirect();
	}

}
