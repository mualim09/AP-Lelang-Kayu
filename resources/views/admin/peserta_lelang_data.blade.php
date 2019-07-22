@extends('layouts.app')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">           
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Data Peserta Lelang,</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Data</h4>
                        <div class="text-right">
                        <a href="{{ route('peserta-lelang-tambah') }}" class="btn btn-inverse-primary mt-2 mt-xl-0"> <i
                            class=" mdi mdi-plus "></i> Tambah Data</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped " id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>No Telepon</th>
                                        <th>Pekerjaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                <?php $no = 0 ?>
                                @foreach ($data as $datas)
                                    <td>{{$no = $no + 1}}</td>
                                    <td>{{$datas->user->name}}</td>
                                    <td>{{$datas->telepon}}</td>
                                    <td>{{$datas->pekerjaan}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('peserta-lelang-detail', ['id' => IDCrypt::Encrypt( $datas->id)])}}" class="btn btn-inverse-success" style="padding:6px !important;"> <i class=" mdi mdi-eye "></i></a>
                                        <a href="{{ route('peserta-lelang-hapus', ['id' => IDCrypt::Encrypt( $datas->id)])}}" class="btn btn-inverse-danger" style="padding:6px !important;"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
