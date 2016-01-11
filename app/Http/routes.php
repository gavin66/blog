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

/**
 * 认证与注册部分
 */
Route::group(['namespace'=>'Auth'],function(){
    Route::group(['prefix'=>'auth'],function(){
        // 认证
        Route::get('login', 'AuthController@getLogin');
        Route::post('login', 'AuthController@postLogin');
        Route::get('logout', 'AuthController@getLogout');

        // 注册
        Route::get('register', 'AuthController@getRegister');
        Route::post('register', 'AuthController@postRegister');
    });

    Route::group(['prefix'=>'password'],function(){
        // 发送密码重置链接路由
        Route::get('email', 'PasswordController@getEmail');
        Route::post('email', 'PasswordController@postEmail');

        // 密码重置路由
        Route::get('reset/{token}', 'PasswordController@getReset');
        Route::post('reset', 'PasswordController@postReset');
    });
});


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

//Route::get('test',function(){return view('test');});
Route::resource('test','TestController');

Route::get('home', 'HomeController@index');

// 文章
// 需要中间件 检测是否是管理员登录  'middleware' => ['Auth']
Route::group(['prefix' => 'admin/article',], function() {
    Route::get('lists', ['as' => 'article.lists','uses'=>'ArticleController@lists']);
    Route::get('edit', ['as'=>'article.edit','uses'=>'ArticleController@edit']);
    Route::get('sort', ['as'=>'article.sort','uses'=>'ArticleController@sort']);
    Route::get('tag', ['as'=>'article.tag','uses'=>'ArticleController@tag']);
});



