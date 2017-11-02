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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function(){
Route::get('/admin', function () {
    return view('admin.main');
});
/*Route::get('/coba', function(){
	return view('profile');
});*/
//Route::get('/profile', 'UserController@profile');
//Route::post('/profile', 'UserController@update_avatar');
Route::get('edit/{id}', 'UserController@edit_pass');
//Route::post('update/{name}', 'UserController@update');*/
//Route::get('kategori/data', 'KategoriController@listData')->name('kategori.data');
Route::get('profile/password', function(){
	return view('change_password');
});
Route::resource('kategori', 'KategoriController');
Route::resource('profile', 'UserController');
});
//Route::get('/', function () {
  //  return view('welcome');
//});



