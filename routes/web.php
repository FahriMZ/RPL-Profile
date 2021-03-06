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
    return redirect('home');
    // Storage::disk('local')->put('file.txt', 'Contents');\
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::put('/admin', 'RplController@update')->name('admin');
Route::get('register', 'HomeController@index')->name('register');

// Agenda
Route::resource('Agenda', 'AgendaController');
Route::get('/Agenda/{Agenda}/delete', 'AgendaController@destroy');
Route::put('/Agenda/{Agenda}/edit', 'AgendaController@update');

// Berita
Route::resource('Berita', 'BeritaController');
Route::get('/Berita/{Berita}/delete', 'BeritaController@destroy');
Route::put('/Berita/{Berita}/edit', 'BeritaController@update');

// Pesan
Route::resource('Pesan', 'PesanController');
Route::get('/Pesan/{Pesan}/delete', 'PesanController@destroy');

// File
Route::resource('File', 'FileController');
Route::get('/File/{File}/delete', 'FileController@destroy');
Route::put('/File/{File}/edit', 'FileController@update');

// Lowongan
Route::resource('Peluang', 'PeluangController');
Route::get('/Peluang/{Peluang}/delete', 'PeluangController@destroy');
Route::put('/Peluang/{Peluang}/edit', 'PeluangController@update');

// Pengumuman
Route::resource('Pengumuman', 'PengumumanController');
Route::get('/Pengumuman/{Pengumuman}/delete', 'PengumumanController@destroy');
Route::put('/Pengumuman/{Pengumuman}/edit', 'PengumumanController@update');

// Guru
Route::resource('Guru', 'GuruController');
Route::get('/Guru/{Guru}/delete', 'GuruController@destroy');
Route::put('/Guru/{Guru}/edit', 'GuruController@update');

// Peluang Kerja
Route::resource('PeluangKerja', 'PeluangKerjaController');
Route::get('/PeluangKerja/{PeluangKerja}/delete', 'PeluangKerjaController@destroy');
Route::put('/PeluangKerja/{PeluangKerja}/edit', 'PeluangKerjaController@update');

// Kolom Guru
Route::resource('KolomGuru', 'KolomController');
Route::get('/KolomGuru/{KolomGuru}/delete', 'KolomController@destroy');
Route::put('/KolomGuru/{KolomGuru}/edit', 'KolomController@update');

// Guest
Route::get('pengumuman-terbaru', 'HomeController@pengumuman')->name('pengumuman');

Route::get('tamu', 'HomeController@tamu')->name('tamu');
Route::post('tamu', 'PesanController@storeAsGuest')->name('tamu');

Route::get('sejarah', 'HomeController@sejarah')->name('sejarah');
Route::get('agenda', 'HomeController@agenda')->name('agenda');
Route::get('berita', 'HomeController@berita')->name('berita');
Route::get('guru', 'HomeController@guru')->name('guru');
Route::get('download', 'HomeController@download')->name('download');
Route::get('organisasi', 'HomeController@organisasi')->name('organisasi');
Route::get('lowongan', 'HomeController@peluang')->name('lowongan');
Route::get('kurikulum', 'HomeController@kurikulum')->name('kurikulum');
Route::get('peluang-kerja', 'HomeController@peluangKerja')->name('peluang');
Route::get('kolom-guru', 'HomeController@kolomGuru')->name('kolom-guru');

Route::get('search', 'HomeController@search');