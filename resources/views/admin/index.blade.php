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
                <h2>Beranda,</h2>
                <p class="mb-md-0">Selamat datang di beranda admin</p>
              </div>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Beranda&nbsp;/&nbsp;</p>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
              <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block " title="profil">
                <i class="mdi mdi-account-circle  text-muted"></i>
              </button>
              <a href="/" class="btn btn-sm btn-inverse-primary mr-3 mt-xl-0"> <i class="mdi mdi-home"></i> Halaman Depan</a>
            </div>
          </div>
        </div>
      </div>
   

      <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dta Peserta Lelang</h4>
                  <div class="media">
                  <img src="admin/images/undraw_interview_rmcf.png" width="200" alt="">
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Lelang</h4>
                  <div class="media">
                  <img src="admin/images/undraw_wallet_aym5.png" width="200" alt="">
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Karyawan</h4>
                  <div class="media">
                  <img src="admin/images/undraw_resume_folder_2_arse.png" width="200" alt="">
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Admin</h4>
                  <div class="media">
                  <img src="admin/images/undraw_dashboard_nklg.png" width="200" alt="">
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
    
    <!-- content-wrapper ends -->
@endsection
