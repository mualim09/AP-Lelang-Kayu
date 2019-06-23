@extends('layouts.app')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Peserta Lelang</h4>
                        <p class="card-description">
                            <hr>
                        </p>
                        <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- {{ route('karyawan_tambah_store') }} --}}
                            <input type="hidden" class="form-control" id="role" name="role" value="1">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Peserta</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Peserta">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                    <label for="exampleTextarea1">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="4" ></textarea>
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputUsername1">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon">
                                </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                    placeholder="Pekerjaan">
                            </div>
                            <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="foto" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                      <input type="text" class="form-control file-upload-info" disabled placeholder="Foto Kayu">
                                      <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                      </span>
                                    </div>
                                    {{ csrf_field() }}
                                </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('karyawan-index') }}">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
