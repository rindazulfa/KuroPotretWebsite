@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Tambah Order</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Data Order
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Tambah Order</li>
                </ol>
            </nav>
        </div>
        <form id="form" method="POST" action="{{route('order.store')}}">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-default" id="tamu_umum">
                        <div class="card-header-border-bottom card-header d-flex justify-content-between">
                            <h2>Identitas Order</h2>
                        </div>
                        <div class="card-body row">
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                            </div>
                            <div class="form-row mb-4 col-lg-2 col-md-6 col-sm-12">
                                <label>Paket</label>
                                <input type="number" class="form-control" name="paket" placeholder="Masukan Nama Paket">
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Tanggal</label>
                                <input type="text" class="form-control" name="tanggal" placeholder="Masukan Tanggal">
                            </div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Status</label>
                                <input type="text" class="form-control" name="status">
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" placeholder="Masukan Lokasi">
                            </div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi">
                            </div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Total</label>
                                <input type="text" class="form-control" name="total">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
        </form>


    </div>
</div>
@endsection