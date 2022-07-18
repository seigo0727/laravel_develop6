<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
        // アカウント
        Route::get('users', 'Master\AdminController@index')->name('users.index');
        Route::get('users/create', 'Master\AdminController@create')->name('users.create');
        Route::post('users', 'Master\AdminController@store')->name('users.store');
        Route::get('users/{id}/edit', 'Master\AdminController@edit')->name('users.edit');
        Route::match(['PUT', 'PATCH'],'users/{id}', 'Master\AdminController@update')->name('users.update');
        Route::delete('users/{id}', 'Master\AdminController@destroy')->name('users.delete');
        // アカウントグループ
        Route::get('groups', 'Master\AdminGroupController@index')->name('groups.index');
        Route::get('groups/create', 'Master\AdminGroupController@create')->name('groups.create');
        Route::post('groups', 'Master\AdminGroupController@store')->name('groups.store');
        Route::get('groups/{id}/edit', 'Master\AdminGroupController@edit')->name('groups.edit');
        Route::match(['PUT', 'PATCH'],'groups/{id}', 'Master\AdminGroupController@update')->name('groups.update');
        Route::delete('groups/{id}', 'Master\AdminGroupController@destroy')->name('groups.delete');

    });

});