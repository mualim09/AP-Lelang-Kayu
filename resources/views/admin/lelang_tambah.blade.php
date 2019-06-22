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
                            <h4 class="card-title">Tambah Data Karyawan</h4>
                            <p class="card-description">
                                <hr>
                            </p>
                          <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="exampleInputUsername1">Nama Lelang</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lelang">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai">
                                    </div>
                                    <div class="form-group">
                                         <label for="exampleInputUsername1">Tempat </label>
                                         <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Harga Awal</label>
                                        <input type="text" class="form-control" name="harga_awal" id="harga_awal" placeholder="Harga Awal">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleSelectGender">Jenis Kayu</label>
                                            <select class="form-control" name="kayu_id">
                                              @foreach($kayu as $j)
                                              <option value="{{$j->id}}">{{ $j->nama_kayu}}</option>
                                              @endforeach
                                            </select>
                                         </div>
                                         {{ csrf_field() }}
                              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                              <a class="btn btn-danger" href="{{ route('lelang-index') }}">Batal</a>
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
