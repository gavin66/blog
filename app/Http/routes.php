<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('phpinfo',function(){phpinfo();});

Route::get('/',function(){return view('home');});
Route::get('article',function(){return view('article');});

//master
Route::controllers([
    'master'=>'MasterController',
    'ajax' => 'AjaxController'
]);

Route::get('gavin',function(){return view('gavin');});
Route::controllers([
    'test'=>'TestController',
]);
