@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Data Paket</h1>
            <br>
            <a href="{{route('package.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Order
            </a>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default" id="tamu_umum">
                    <div class="card-header-border-bottom card-header d-flex justify-content-between">
                        <h2>Orderan KuroPotret</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Order</p>
                            <div>
                                <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
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
                                        <th>Nama Pembeli</th>
                                        <th>Paket</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Lokasi</th>
                                        <th>Deskripsi</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $key)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>{{$key->name_pack}}</td>
                                        <td>{{$key->date}}</td>
                                        <td>{{$key->status}}</td>
                                        <td>{{$key->location}}</td>
                                        <td>{{$key->description}}</td>
                                        <td>{{$key->total}}</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="{{route('order.show',[$key->id])}}">Detail</a>
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