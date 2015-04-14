<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEntryRequest;
use App\Entry;
use Request;

// use Illuminate\Http\Request;

class EntryController extends Controller {

	public function getIndex()
	{
		return view('inscriere');
	}

	public function postIndex(CreateEntryRequest $request)
	{
		$input = $request->all();

		Entry::create($input);

		return response()->json([
                                  'status' => 'OK'
                                , 'message' => 'Formul nu a fost completat'
                                ]);
	}

}
