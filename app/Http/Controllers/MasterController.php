<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MasterController extends Controller {

	public function getHome(){
		return view('home');
	}



	public function getPjax(Request $request){
		$request->input();
		if(array_key_exists('HTTP_X_PJAX',$_SERVER) && $_SERVER['HTTP_X_PJAX']){
			return view('pjax');
		}else{
			echo '这个不是Pjax返回的';
		}
	}



}
