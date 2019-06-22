@extends('layouts.app')

@section('title', __('outlet.list'))

@section('content')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="mr-md-3 mr-xl-5">
                <h2>Profile kayu,</h2>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
            </div>
          </div>
        </div>
      </div>
            <div class="row">
                    <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body text-center">
                               <img src="{{asset('/images/kayu/'.$kayu->foto)}}" alt="" width="100%">
                              </div>
                            </div>
                          </div>
                    <div class="col-md-7 grid-margin stretch-card">
                      <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title">Detail Kayu</h4>

                                    <div class="template-demo">
                                      <h4 class="card-title">Nama                    : {{$kayu->nama_kayu}}</h4>
                                      <h4 class="card-title">keterangan              : {{$kayu->keterangan}}</h4>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="text-right">
                                            <a href="{{ route('kayu-edit', ['id' => IDCrypt::Encrypt( $kayu->id)])}}" class="btn btn-sm btn-inverse-primary" style="padding:10px !important;"> Ubah data</a>
                                            <a href="{{ route('kayu-index') }}" class="btn btn-sm btn-inverse-danger" style="padding:10px !important;"> Kembali</a>
                                       </div>
                                    </div>
                      </div>
                    </div>

                  </div>
      </div>

    <!-- content-wrapper ends -->
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
