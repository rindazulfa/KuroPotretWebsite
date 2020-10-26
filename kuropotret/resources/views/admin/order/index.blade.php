@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Data Order</h1>
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
                                <a href="/order/export_excel" target="" class="btn btn-outline-success btn-sm text-uppercase">
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
                                        <th>Lokasi</th>
                                        <th>DP</th>
                                        <th>Total</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $key)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>{{$key->name_pack}}</td>
                                        <td>{{$key->date}}</td>
                                        <td>{{$key->location}}</td>
                                        <td>{{$key->dp}}</td>
                                        <td>{{number_format($key->total,2,',','.')}}</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="{{route('order.show',[$key->id])}}">Detail</a>
                                        </td>
                                        <!-- <td>{{$key->status}}</td> -->
                                        @if($key->status)
                                        @if($key->status == 1)
                                        <td>Diterima</td>
                                        @include('sweetalert::alert')
                                        @else
                                        <td>Ditolak</td>
                                        @endif
                                        @else
              
                                        <td>
                                            <form method="post" action="{{route('order.update-sts', [$key->id])}}">
                                                @csrf
                                                <input type="hidden" name="status" value="1" />
                                                <button class="btn btn-sm text-white btn-success" type="submit">Terima</button>
                                            </form>

                                            <form method="post" action="{{route('order.update-sts', [$key->id])}}">
                                                @csrf
                                                <input type="hidden" name="status" value="0" />
                                                <button class="btn btn-sm text-white btn-danger" type="submit">Tolak</button>
                                            </form>

                                        </td>
                                        @endif

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