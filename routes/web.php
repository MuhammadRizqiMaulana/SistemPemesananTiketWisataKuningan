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


// --------------Admin-------------------//
Route::get('/admin/DashboardAdmin', function () {
    return view('Admin.halaman.DashboardAdmin');
});

Route::get('/admin/MengelolaTempatWisata','MengelolaTempatWisataController@index');
Route::get('/admin/TambahTempatWisata','MengelolaTempatWisataController@tambah');
Route::post('/admin/AksiTambahTempatWisata','MengelolaTempatWisataController@store');
Route::get('/admin/UbahTempatWisata{id_wisata}','MengelolaTempatWisataController@edit');
Route::post('/admin/AksiUbahTempatWisata{id_wisata}','MengelolaTempatWisataController@update');
Route::get('/admin/HapusTempatWisata{id_wisata}','MengelolaTempatWisataController@delete');


