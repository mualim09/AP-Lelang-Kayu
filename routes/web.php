<?php

Route::get('/', function () {
    return view('welcome');
});

//halaman admin
Route::group(['middleware' => 'admin'], function() {
    Route::get('/halaman_admin','adminController@index' )->name('admin_index');

// halaman admin
//data karyawan
Route::get('/karyawan','adminController@karyawan_index' )
->name('karyawan-index');
Route::get('/karyawan/tambah','adminController@karyawan_tambah')
->name('karyawan-tambah');
Route::POST('/karyawan/tambah','adminController@karyawan_tambah_store')
->name('karyawan-tambah_store');
Route::get('/karyawan/detail/{id}','adminController@karyawan_detail')
->name('karyawan-detail');
Route::get('/karyawan/edit/{id}','adminController@karyawan_edit')
->name('karyawan-edit');
Route::put('/karyawan/edit/{id}','adminController@karyawan_update')
->name('karyawan-update');
Route::get('/karyawan/hapus/{id}','adminController@karyawan_hapus')
->name('karyawan-hapus');
//data karyawan

//data kayu
Route::get('/kayu','adminController@kayu_index' )
->name('kayu-index');
Route::POST('/kayu','adminController@kayu_tambah_store')
->name('kayu-tambah_store');
Route::get('/kayu/detail/{id}','adminController@kayu_detail')
->name('kayu-detail');
Route::get('/kayu/edit/{id}','adminController@kayu_edit')
->name('kayu-edit');
Route::put('/kayu/edit/{id}','adminController@kayu_update')
->name('kayu-update');
Route::get('/kayu/hapus/{id}','adminController@kayu_hapus')
->name('kayu-hapus');
//data kayu

//data lelang
Route::get('/lelang','adminController@lelang_index' )
->name('lelang-index');
Route::get('/lelang/tambah','adminController@lelang_tambah')
->name('lelang-tambah');
Route::POST('/lelang/tambah','adminController@lelang_tambah_store')
->name('lelang-tambah_store');
Route::get('/lelang/detail/{id}','adminController@lelang_detail')
->name('lelang-detail');
Route::get('/lelang/edit/{id}','adminController@lelang_edit')
->name('lelang-edit');
Route::put('/lelang/edit/{id}','adminController@lelang_update')
->name('lelang-update');
Route::get('/lelang/hapus/{id}','adminController@lelang_hapus')
->name('lelang-hapus');
//data lelang


//data berita
Route::get('/berita','adminController@berita_index' )
->name('berita-index');
Route::get('/berita/tambah','adminController@berita_tambah')
->name('berita-tambah');
Route::POST('/berita/tambah','adminController@berita_tambah_store')
->name('berita-tambah_store');
Route::get('/berita/detail/{id}','adminController@berita_detail')
->name('berita-detail');
Route::get('/berita/edit/{id}','adminController@berita_edit')
->name('berita-edit');
Route::put('/berita/edit/{id}','adminController@berita_update')
->name('berita-update');
Route::get('/berita/hapus/{id}','adminController@berita_hapus')
->name('berita-hapus');
//data berita

//data peserta
Route::get('/peserta','adminController@peserta_index' )
->name('peserta-index');
Route::get('/peserta/tambah','adminController@peserta_tambah')
->name('peserta-tambah');
Route::POST('/peserta/tambah','adminController@peserta_tambah_store')
->name('peserta-tambah_store');
Route::get('/peserta/detail/{id}','adminController@peserta_detail')
->name('peserta-detail');
Route::get('/peserta/edit/{id}','adminController@peserta_edit')
->name('peserta-edit');
Route::put('/peserta/edit/{id}','adminController@peserta_update')
->name('peserta-update');
Route::get('/peserta/hapus/{id}','adminController@peserta_hapus')
->name('peserta-hapus');
//data berita

//data  lelang

//Berita
Route::get('/berita','adminController@Berita_index' )->name('berita-index');
Route::get('/berita_tambah','adminController@Berita_tambah' )->name('berita-tambah');
});


//halaman peserta
Route::get('/halaman_user','pesertaController@index' )->name('peserta-index');
Route::get('/lelang_berlangsung','pesertaController@lelang_berlangsung' )->name('lelang-berlangsung');

Auth::routes();

Route::get('/home', 'dashboardController@index')->name('home');

