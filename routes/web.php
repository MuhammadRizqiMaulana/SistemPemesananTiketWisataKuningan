<?php

use Illuminate\Support\Facades\Route;

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

//----------------Pelanggan--------------//

Route::get('/','HomeController@index');


Route::get('/FormTiketWisata', function () {
    return view('Pelanggan.halaman.FormTiketWisata');
});
Route::get('/FormTiketWisata{id}','PemesananController@index');
Route::post('/AksiPemesanan','PemesananController@store');


// --------------Admin-------------------//
Route::get('/admin/DashboardAdmin', function () {
    return view('Admin.halaman.DashboardAdmin');
});

Route::get('/admin/MengelolaTempatWisata','MengelolaTempatWisataController@index');
Route::get('/admin/TambahTempatWisata','MengelolaTempatWisataController@tambah');
Route::post('/admin/AksiTambahTempatWisata','MengelolaTempatWisataController@store');
Route::get('/admin/UbahTempatWisata{id}','MengelolaTempatWisataController@edit');
Route::post('/admin/AksiUbahTempatWisata{id}','MengelolaTempatWisataController@update');
Route::get('/admin/HapusTempatWisata{id}','MengelolaTempatWisataController@delete');

Route::get('/admin/MengelolaGaleri','MengelolaGaleriController@index');
Route::get('/admin/TambahGaleri','MengelolaGaleriController@tambah');
Route::post('/admin/AksiTambahGaleri','MengelolaGaleriController@store');
Route::get('/admin/HapusGaleri{id}','MengelolaGaleriController@delete');
