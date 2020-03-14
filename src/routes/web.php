<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function() {
 
    Route::group(['middleware' => 'guest'], function(){//ログイン済みでない時
        /**
         * --------------------------------------------------------------------------------
         * 新規登録
         */
        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);
    
        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        /**
         * --------------------------------------------------------------------------------
         * ログイン
         */
        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);

    });

 
    Route::group(['middleware' => 'auth'], function(){// URL直打ち禁止
        /**
         * --------------------------------------------------------------------------------
         * ユーザープロフィール
         */
        Route::get('/profile',[
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        /**
         * --------------------------------------------------------------------------------
         * ログアウト
         */
        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });

    /**
     * --------------------------------------------------------------------------------
     */

});
