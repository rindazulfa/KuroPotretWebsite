@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Edit Order</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            Data Order
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Edit Order</li>
                </ol>
            </nav>
        </div>
        <form action="{{route('order.update', [$edit->id])}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Edit Order</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$edit->name}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Paket</label>
                                    <input type="text" class="form-control" name="paket" value="{{$edit->name_pack}}">
                                </div>
                                <div class="w-100"></div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" value="{{$edit->date}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" value="{{$edit->location}}">
                                </div>
                                          <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" value="{{$edit->description}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>DP</label>
                                    <input type="number" class="form-control" name="biaya" value="{{$edit->dp}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Transportasi</label>
                                    <input type="number" class="form-control" name="biaya_transportasi" value="{{$edit->price_transportation}}">
                                </div>
                                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <label>Total</label>
                                    <input type="number" class="form-control" disabled  name="total" value="{{$edit->total}}">
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