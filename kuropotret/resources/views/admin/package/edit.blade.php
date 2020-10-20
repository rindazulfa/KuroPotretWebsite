@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Edit Paket</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            Data Paket
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Edit Paket</li>
                </ol>
            </nav>
        </div>
        <form action="{{route('package.update', [$edit->id])}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Edit Paket</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Nama Paket</label>
                                    <input type="text" class="form-control" name="nama" value="{{$edit->name_pack}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{$edit->price}}">
                                </div>
                                <div class="w-100"></div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Jumlah Foto</label>
                                    <input type="text" class="form-control" name="jml_foto" value="{{$edit->qty_photos}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Jumlah Edit</label>
                                    <input type="text" class="form-control" name="jml_edit" value="{{$edit->qty_edit}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Durasi</label>
                                    <input type="text" class="form-control" name="durasi" value="{{$edit->duration}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Penyewaan</label>
                                    <input type="text" class="form-control" name="penyewaan" value="{{$edit->working_hours}}">
                                </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Edit Paket</button>
        </form>
    </div>
</div>
@endsection