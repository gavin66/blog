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

// 测试使用
Route::resource('category', 'Backend\CategoryController');


Route::get('phpinfo', function () {
    phpinfo();
});

//Route::get('test','TestController@index');
//Route::get('test','Frontend\FrontendController@test');
//Route::get('test', function () {
//    echo 'Hello';
//});

Route::get('httpTest', function () {
    $client = new \GuzzleHttp\Client([
        'base_uri' => 'http://httpbin.org',
        'timeout' => 2.0,
    ]);
    $response = $client->request('GET', 'get', ['query' => ['foo' => 'bar'],'body'=>'Gavin']);

    echo $response->getBody();

});

Route::get('duoshuo', function () {
    $duoshuo = new \App\Services\DuoShuo();
    echo $duoshuo->getHotArticles();
});


Route::get('redisTest', function () {
    $v = RedisGo::get('hello');

    return $v;
});
Route::get('orm', function () {
    $data = \App\Model\Article::skip(0)->take(10)->get();

    dd($data);
});

Route::get('table-edit', function () {
    Schema::table('articles', function ($table) {
        $table->string('outline');
    });
});


/**
 * 前台部分
 */
Route::group(['namespace' => 'Frontend'], function () {

    // 前台主页 文章列表
    Route::get('/', 'FrontendController@index');

    // 文章详细页
    Route::get('article/{id}', 'FrontendController@article');

    // 分类
    Route::get('category', 'FrontendController@category');

    // 归档
    Route::get('archive', 'FrontendController@archive');

    // 关于我
    Route::get('about', 'FrontendController@about');

    // 点赞
    Route::get('thumbsUp', 'FrontendController@thumbsUp');

});


/**
 * 认证与注册部分
 */
Route::group(['namespace' => 'Auth'], function () {

    // 显示认证页
    Route::get('auth', 'AuthController@getAuth');
    Route::get('admin', 'AuthController@getAuth');

    Route::group(['prefix' => 'auth'], function () {
        // 登录
        Route::post('signIn', 'AuthController@postSignIn');

        // 登出
        Route::get('signOut', 'AuthController@getSignOut');

        // 注册
        Route::post('signUp', 'AuthController@postRegister');
    });

    Route::group(['prefix' => 'password'], function () {
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
Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'backend'], function () {

        // 后台主页
        Route::get('/', 'BackendController@index');

        /**
         * 需要添加一个中间件, pjax访问还是其他
         */
        //文章
        Route::resource('article', 'ArticleController');
        Route::resource('category', 'CategoryController');
        Route::resource('tag', 'TagController');

    });
});









