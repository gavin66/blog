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
//Route::get('article',function(){return view('article');});

//master
Route::controllers([
    'master'=>'MasterController',
    'ajax' => 'AjaxController',
]);
Route::get('backstage',function(){return view('backstage');});

Route::get('gavin',function(){return view('gavin');});

Route::get('test',function(){return view('test');});


// 文章
// 需要中间件 检测是否是管理员登录
Route::group(['prefix' => 'admin/article','middleware' => ['']], function()
{
    Route::get('lists', ['as' => 'article.lists','uses'=>'ArticleController@lists']);
    Route::get('edit', ['as'=>'article.edit','uses'=>'ArticleController@edit']);
    Route::get('sort', ['as'=>'article.sort','uses'=>'ArticleController@sort']);
    Route::get('tag', ['as'=>'article.tag','uses'=>'ArticleController@tag']);
});

