@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Data Paket</h1>
            <br>
            <a href="{{route('package.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Paket
            </a>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default" id="tamu_umum">
                    <div class="card-header-border-bottom card-header d-flex justify-content-between">
                        <h2>Paket KuroPotret</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Paket</p>
                            <div>
                                <a href="/package/export_excel" target="" class="btn btn-outline-success btn-sm text-uppercase">
                                    <i class="fas fa-file-excel"></i> Export Excel
                                </a>
                                <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                                    <i class="fas fa-print"></i> Print
                                </a>
                            </div>
                        </div>
                        <div class="responsive-data-table">
                            <table class="table dt-responsive nowrap data-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Jumlah Foto</th>
                                        <th>Jumlah Edit</th>
                                        <th>Durasi</th>
                                        <th>Penyewaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($packages as $key)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$key->name_pack}}</td>
                                        <td>Rp {{number_format($key->price,2,',','.')}}</td>
                                        <td>{{$key->qty_photos}}</td>
                                        <td>{{$key->qty_edit}}</td>
                                        <td>{{$key->duration}}</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="{{route('package.show',[$key->id])}}">Detail</a>
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
</div>
@endsection
