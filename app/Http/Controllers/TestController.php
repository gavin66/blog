<?php namespace App\Http\Controllers;

use App\Services\UploadHandler;

class TestController extends Controller {
	public function getPage(){
		return view('test');
	}

	public function postPictureSave(){
		$uploadHandler = new UploadHandler();
	}

}
