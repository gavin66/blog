<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MasterController extends Controller {

	public function getHome(){
		return view('home');
	}

}