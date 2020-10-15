@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Data Kritik dan Saran</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default" id="tamu_umum">
                    <div class="card-header-border-bottom card-header d-flex justify-content-between">
                        <h2>Kritik dan Saran</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Kritik dan Saran</p>
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
                                        <th>Nama</th>
                                        <th>No. Telp</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contact as $key)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>{{$key->no_phone}}</td>
                                        <td>{{$key->email}}</td>
                                        <td>{{$key->pesan}}</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="{{route('kritik.show',[$key->id_contact])}}">Detail</a>
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
