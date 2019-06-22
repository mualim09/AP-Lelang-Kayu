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


//data peserta lelang
Route::get('/peserta_lelang','lelangController@peserta_lelang_index' )->name('peserta-lelang-index');
//data peserta lelang


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

