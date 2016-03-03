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

// 文章列表
Route::get('/','FrontendController@index');

Route::get('phpinfo',function(){phpinfo();});

/**
 * 前台部分
 */
Route::group(['namespace'=>'frontend'],function(){

    // 前台主页
    Route::get('/','FrontendController@index');

    Route::group(['prefix'=>'frontend'],function(){

    });

});


/**
 * 认证与注册部分
 */
Route::group(['namespace'=>'auth'],function(){

    // 显示认证页
    Route::get('auth', 'AuthController@getAuth');

    Route::group(['prefix'=>'auth'],function(){
        // 登录
        Route::post('signIn', 'AuthController@postSignIn');

        // 登出
        Route::get('signOut', 'AuthController@getSignOut');

        // 注册
        Route::post('signUp', 'AuthController@postRegister');
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


/**
 * 后台部分
 */
Route::group(['namespace'=>'backend','middleware'=>'auth'],function(){
    Route::group(['prefix'=>'backend'],function(){

        // 后台主页
        Route::get('/','BackendController@index');

        /**
         * 需要添加一个中间件, pjax访问还是其他
         */
        //文章
        Route::resource('article','ArticleController');


    });
});

Route::get('article',function(){return view('article');});


Route::get('orm',function(){
//    $data = \App\Article::all();


    $data = \App\Article::skip(0)->take(10)->get();

    dd($data);
});






