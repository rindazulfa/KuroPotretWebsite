@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Tambah Paket</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Data Paket
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Tambah Paket</li>
                </ol>
            </nav>
        </div>
        <form id="form" method="POST" action="{{route('package.store')}}">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-default" id="tamu_umum">
                        <div class="card-header-border-bottom card-header d-flex justify-content-between">
                            <h2>Identitas Paket</h2>
                        </div>
                        <div class="card-body row">
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Nama Paket</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Paket">
                            </div>
                            <div class="form-row mb-4 col-lg-2 col-md-6 col-sm-12">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga" placeholder="Masukan Harga">
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Jumlah Foto</label>
                                <input type="text" class="form-control" name="jml_foto" placeholder="Masukan Jumlah Foto">
                            </div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Jumlah Edit</label>
                                <input type="text" class="form-control" name="jml_edit" placeholder="Masukan Jumlah Edit">
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Durasi</label>
                                <input type="text" class="form-control" name="durasi" placeholder="Masukan Durasi">
                            </div>
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Penyewaan</label>
                                <input type="text" class="form-control" name="penyewaan">
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