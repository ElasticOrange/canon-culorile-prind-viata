<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	public function index()
	{
		return view('home');
	}

	public function getColors()
	{
		return view('colors');	
	}

	public function getSharp()
	{
		return view('sharpness');
	}

	public function getDurata()
	{
		return view('durata');
	}
}
