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

Auth::routes(['verify' => true, 'register' => false]);


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


//	  Route::resource('admin/artists', 'AdminArtistsController');
//
//    Route::get('admin/artists', 'AdminArtistsController@index')->name('admin.artists.index');
//
//    Route::get('admin/artists/create', 'AdminArtistsController@create')->name('admin.artists.create');
//
//    Route::post('admin/artists', 'AdminArtistsController@store')->name('admin.artists.store');
//
//    Route::get('admin/artists/{id}/edit', 'AdminArtistsController@edit')->name('admin.artists.edit');

    //this renaming of routes is the same as above
    Route::resource('admin/artists', 'AdminArtistsController', ['names'=>[

        'index'=>'admin.artists.index',
        'create'=>'admin.artists.create',
        'store'=>'admin.artists.store',
        'show'=>'admin.artists.show',
        'edit'=>'admin.artists.edit',
        'update'=>'admin.artists.update',
        'destroy'=>'admin.artists.destroy'

    ]]);



    Route::resource('admin/photos', 'AdminPhotosController');


});

