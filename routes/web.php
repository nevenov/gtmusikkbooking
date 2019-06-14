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

use App\Artist;

//Route::get('/', function () {
//    return view('index');
//});


Route::get('/', 'FrontCategoriesController@index')->name('index');


Route::get('/gruppe/{id}', ['as'=>'categories.gruppe', 'uses'=>'FrontCategoriesController@show']);


Route::get('artist/{id}', ['as'=>'artist.show', 'uses'=>'FrontArtistsController@show']);


Auth::routes(['verify' => true, 'register' => false]);


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('admin');



//Route::resource('categories', 'FrontCategoriesController');


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


    Route::post('admin/artists/search', 'AdminArtistsController@search')->name('admin.artists.search');


    // route for admin/photos use AdminPhotosController
    Route::resource('admin/photos', 'AdminPhotosController');

    // this route is used to delete photo in Artist -> Edit view
    Route::get('admin/photos/{id}/delete', ['uses' => 'AdminPhotosController@destroy', 'as' => 'admin.photos.delete']);



    //routes for Category
    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[

        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'show'=>'admin.categories.show',
        'edit'=>'admin.categories.edit',
        'update'=>'admin.categories.update',
        'destroy'=>'admin.categories.destroy'

    ]]);

    // this route is used to delete photo in Category -> Edit view
    Route::get('admin/photos/categories/{id}/delete', ['uses' => 'AdminPhotosController@destroycategory', 'as' => 'admin.photos.categories.delete']);


    // route for admin/audios use AdminPhotosController
    Route::resource('admin/audios', 'AdminAudiosController');

    // this route is used to delete photo in Category -> Edit view
    Route::get('admin/audios/{id}/delete', ['uses' => 'AdminAudiosController@destroy', 'as' => 'admin.audios.delete']);


}); // end auth middleware

