@extends('layouts.app')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Berita Filter</h4>
                        <p class="card-description">
                            <hr>
                        </p>
                        <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="exampleSelectGender">Periode</label>
                                <input type="date" class="form-control">
                            </div>
                            </div>
                            {{ csrf_field() }}
                       <div class="card-footer">
                       <div class="text-right">
                        <button type="submit" class="btn btn-primary mr-2">Filter</button>
                            <a class="btn btn-danger" href="{{ route('kayu-index') }}">Batal</a>
                        </div>
                       </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
