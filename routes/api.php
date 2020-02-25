<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthApiController@login');
    Route::post('logout', 'AuthApiController@logout');
    Route::post('refresh', 'AuthApiController@refresh');
    Route::post('me', 'AuthApiController@me');

});

Route::apiResource('artikel','ArtikelAPIController');
Route::apiResource('kategori_artikel','KategoriArtikelAPIController');

Route::apiResource('berita','BeritaAPIController');
Route::apiResource('kategori_berita','KategoriBeritaAPIController');

Route::apiResource('galeri','GaleriAPIController');
Route::apiResource('kategori_galeri','KategoriGaleriAPIController');

Route::apiResource('pengumuman','PengumumanAPIController');
Route::apiResource('kategori_pengumuman','KategoriPengumumanAPIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Soal1
//Tampilkan artikel dengan id=17 dan user_id=160
Route::get('soal1','BabSatuController@a1');

//Soal2
//Tampilkan artikel dengan id=2 atau id=5
Route::get('soal2','BabSatuController@a2');

//Soal3
//Tampilkan pengumuman yang dibuat oleh Id=32 dan user dengan nama = Aslijan Megantara, sertakan usernya
Route::Post('soal32','BabSatuController@a32');

//Soal4
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
Route::post('soal4','BabDuaController@a4');

//Soal5
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan nama kategori yang diawali dengan AUT
Route::put('soal5','BabDuaController@a5');

//Soal6
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga berita
Route::patch('soal6','BabDuaController@a6');