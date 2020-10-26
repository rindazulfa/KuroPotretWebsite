@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">

        <div class="breadcrumb-wrapper">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card bg-primary card-default">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Pesanan</h5>
                        <span class="h2 mt-2">{{$pesanan}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card bg-success card-default">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Paket</h5>
                        <span class="h2 mt-2">{{$paket}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-4 col-sm-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Laporan Pendapatan</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                                <h5 class="mt-2 mb-4">Penjualan per Paket</h5>
                                <canvas id="paket-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Summary</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                                <h5 class="mt-2 mb-4">Pesanan</h5>
                                <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                        <h2>Data Pesanan</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="/order/export_excel" target="" class="btn btn-outline-success btn-sm text-uppercase">
                                <i class="fas fa-file-excel"></i> Export Excel
                            </a>
                            <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                                <i class="fas fa-print"></i> Print
                            </a>
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
                                        <th>Deskripsi</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Baris 1 -->
                                    @foreach($transactions as $key)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>{{$key->name_pack}}</td>
                                        <td>{{$key->date}}</td>
                                        <td>{{$key->location}}</td>
                                        <td>{{$key->description}}</td>
                                        <td>{{number_format($key->total,2,',','.')}}</td>
                                        <td>{{$key ->status}}</td>
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
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Paket</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Pengelolaan data paket yang akan dijual</p>
                        <a href="{{route('package.create')}}" class="btn btn-primary mb-4">
                            Tambah Paket
                        </a>
                        <a href="{{url('package')}}" class="btn btn-outline-secondary mb-4">
                            Lihat Data
                        </a>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Kritik & Saran</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Pengelolaan data kritik & saran untuk mengetahui kepuasan pelanggan</p>
                        <a href="{{url('kritik')}}" class="btn btn-outline-secondary mb-4">
                            Lihat Data
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

"@endsection
@push('script')
<script>
    new Chart(document.getElementById("paket-chart"), {
        type: 'bar',
        data: {
            labels: [
                <?php
                foreach ($report as $key => $value) {
                    echo "'" . $value->month . "-" . $value->year . "'" . ",";
                }
                ?>
            ],
            datasets: [{
                label: 'Pendapatan',
                data: [
                    <?php
                    foreach ($report as $key => $value) {
                        echo $value->data . ",";
                    }
                    ?>
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Paket 1', 'Paket 2', 'Paket 3', 'Paket 4', 'Paket 5', 'Paket 6'],
            datasets: [{
                label: 'Paket 1',
                data: [
                    <?php
                    foreach ($perpaket as $key => $value) {
                        echo $value->total . ',';
                    }
                    ?>

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endpush