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

//Route::get('/', 'WelcomeController@index');
Route::get('phpinfo',function(){phpinfo();});

Route::get('/','EntryController@index');
Route::get('article',function(){return view('article');});
Route::get('webinfo',function(){echo '我的天,怎么回事';});

Route::controllers([
    'ajax' => 'Ajax\AjaxController'
]);

Route::get('gavin',function(){return view('gavin');});

Route::controllers([
    'test'=>'TestController',
]);
