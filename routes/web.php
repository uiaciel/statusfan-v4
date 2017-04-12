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

Route::get('/', 'BerandaController@index');
Route::get('/mading/{slug}', 'BerandaController@show');
Route::get('/kategori/{slug}', 'BaseController@kategori');
Route::get('cari', 'BaseController@cari');
Route::get('/mading', 'BlogController@index');
Route::get('/search/{slug}', 'BaseController@cari');


Route::get('/admincp/', 'AdmincpController@index');


Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::get('sahabat/{slug}', [
      'uses' => 'ProfilesController@index',
      'as' => 'profile'
    ]);

    Route::get('profile/edit', [
      'uses' => 'ProfilesController@edit',
      'as' => 'profile.edit'
    ]);

    Route::post('profile/update', [
      'uses' => 'ProfilesController@update',
      'as' => 'profile.update'
    ]);

    //Route::get('/blog/buat', 'BlogController@create');

});

Route::group(['middleware' => ['web']], function() {
  Route::resource('mading','BlogController');
  Route::get('/kirim-cerita', [
    'uses' => 'BlogController@create',
    'as' => 'kirim.cerita'
    ]);
});
