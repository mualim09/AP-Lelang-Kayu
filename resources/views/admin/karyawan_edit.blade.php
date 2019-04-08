@extends('layouts.app')

@section('title', __('outlet.list'))

@section('content')
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Edit Data Karyawan</h4>
                            <p class="card-description">
                                <hr>
                            </p>
                            <form class="forms-sample">
                                    <div class="form-group">
                                            <label for="exampleInputUsername1">Nama </label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kayu">
                                          </div>
                                    <div class="form-group">
                                         <label for="exampleInputUsername1">NIP </label>
                                         <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kayu">
                                     </div>
                                     <div class="form-group">
                                            <label for="exampleInputUsername1">No Telp </label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kayu">
                                    </div>
                                     <div class="form-group">
                                            <label for="exampleTextarea1">Alamat</label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                         <input type="file" name="img[]" class="file-upload-default">
                                             <div class="input-group col-xs-12">
                                                 <input type="text" class="form-control file-upload-info" disabled placeholder="isi jika ingin mengubah gambar">
                                                <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputUsername1">Tempat Lahir </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kayu">
                                     </div>
                                     <div class="form-group">
                                            <label for="exampleInputUsername1">Tanggal Lahir  </label>
                                            <input type="date" class="form-control" id="exampleInputUsername1" placeholder="Nama Kayu">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option>Menikah</option>
                                                <option>Belum Menikah</option>
                                            </select>
                                        </div>
                              <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                              <a class="btn btn-danger" href="{{ route('kayu_index') }}">Batal</a>
                            </form>
                          </div>
                        </div>
                      </div>
        </div>

    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
@endsection
