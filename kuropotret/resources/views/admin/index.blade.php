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
                        <h5 class="card-title">Jumlah Omset</h5>
                        <span class="h2 mt-2">5</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card bg-success card-default">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Keuntungan</h5>
                        <span class="h2 mt-2">1</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Summary</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                                <h5 class="mt-2 mb-4">Penjualan per Produk</h5>
                                <canvas id="produk-chart"></canvas>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                                <h5 class="mt-2 mb-4">Pekerjaan</h5>
                                <canvas id="pekerjaan-chart"></canvas>
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
                            <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
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
                                        <th>Nama Pelanggan</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Total Pesanan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                        <!-- Baris 1 -->
                                        <tr>
                                            <th scope="row">  </th>
                                            <td>  </td>
                                            <td> </td>
                                            <td> </td>
                                            <td>
                                                <!-- Detail -->
                                                <div style="float: left">
                                                    <form action="" method="get">
                                                        <input type="hidden" name="id_pesanan">
                                                        <button class="btn btn-primary btn-sm" type="submit"> Detail </button>
                                                    </form>
                                                </div>
                                                <!-- Delete -->
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="<?php echo '#deleteModal-' ?>">Delete</button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="" method="get">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Pesanan Pelanggan </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden"  name="id_pesanan">
                                                                    Apakah yakin untuk delete?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="delete" class="btn btn-danger">Delete</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                   

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Produk</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Pengelolaan data produk yang akan dijual</p>
                        <a href="/dbpw192_18410100132/pages/produk/create.php" class="btn btn-primary mb-4">
                            Tambah Produk
                        </a>
                        <a href="/dbpw192_18410100132/pages/produk/index.php" class="btn btn-outline-secondary mb-4">
                            Lihat Data
                        </a>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Bahan Baku</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Pengelolaan data bahan baku untuk memperkirakan bahan yang diperlukan</p>
                        <a href="/dbpw192_18410100132/pages/bahan_baku/create.php" class="btn btn-primary mb-4">
                            Tambah Bahan
                        </a>
                        <a href="/dbpw192_18410100132/pages/bahan_baku/index.php" class="btn btn-outline-secondary mb-4">
                            Lihat Data
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection