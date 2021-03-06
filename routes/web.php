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
//Route::get('edit/{id}', 'UserController@edit_pass');
//Route::post('update/{name}', 'UserController@update');*/
/*Route::get('profile/password', function(){
	return view('change_password');
});*/
//Route::get('profile/{profile}/pass', 'UserController@showPassword')->name('profile.showPass');

//bagian kategori
Route::get('kategori/data', 'KategoriController@listData')->name('kategori.data');
Route::post('kategori/hapus','KategoriController@deleteSelected');
Route::resource('kategori', 'KategoriController');

//bagian User
Route::resource('profile', 'UserController');
Route::get('user/data', 'UserController@listData')->name('user.data');

//bagian profil dan ubah password
Route::get('edit/{profile}/profile','ProfileController@edit')->name('profile.data');
Route::post('edit/{profile}/update','ProfileController@update')->name('profile.update_data');

//Bagian Supplier
Route::get('supplier/data', 'SupplierController@listData')->name('supplier.data');
Route::resource('supplier', 'SupplierController');
Route::get('supplier/get-kota-list/{id}','SupplierController@ambilDataKota');

//Bagian Provinsi
Route::get('provinsi/data', 'ProvinsiController@listData')->name('provinsi.data');
Route::resource('provinsi', 'ProvinsiController');

//Bagian Kota
Route::get('kota/data', 'KotaController@listData')->name('kota.data');
Route::post('kota/hapus','KotaController@deleteSelected');
Route::resource('kota', 'KotaController'); 

//Bagian Produk
Route::get('produk/data', 'ProdukController@listData')->name('produk.data');
Route::post('produk/hapus','ProdukController@deleteSelected');
Route::resource('produk', 'ProdukController');
Route::get('pdfproduk', 'ProdukController@makePDF'); 
});
//Route::get('/', function () {
  //  return view('welcome');
//});





