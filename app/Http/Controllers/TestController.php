<?php namespace App\Http\Controllers;

use App\Contracts\TestContract;
use App\Services\UploadHandler;
use Illuminate\Support\Facades\App;
use App\Facades\TestClass;

class TestController extends Controller {
	protected $test;
	public function __construct(TestContract $test){
		$this->test = $test;
	}

	public function index(){
//		 $test = App::make('testC');
//		 $test->callMe('TestController');
//		$this->test->callMe('TestController');

		TestClass::doSomething();
	}


//	public function getPage(){
//		return view('test');
//	}
//
//	public function postPictureSave(){
//		$uploadHandler = new UploadHandler();
//	}

}
