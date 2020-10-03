@extends('pages.admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">

        <h2 style="text-align: center; margin-bottom: 20px;">Tabel Daftar Produk</h2>
       
        <div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Tambah daftar produk</h2>
										</div>
										<div class="card-body">
											<form action="tambahproduct.store" method="POST">
												<div class="form-group">
													<label for="exampleFormControlInput1">Nama Produk</label>
													<input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name">
												</div>
												<div class="form-group">
													<label>Harga</label>
													<input name="harga" type="text" class="form-control" id="exampleFormControlPassword" placeholder="Enter Price">
												</div>
												<div class="form-group">
													<label>Jumlah Foto</label>
													<input name="jumlah_foto" type="text" class="form-control" id="exampleFormControlPassword" placeholder="Enter Qty">
												</div>
												<div class="form-group">
													<label>Jumlah Edit Foto</label>
													<input name="jumlah_edit" type="text" class="form-control" id="exampleFormControlPassword" placeholder="Enter Qty">
												</div>
												<div class="form-group">
													<label>Durasi Video</label>
													<input name="durasi_video"  type="text" class="form-control" id="exampleFormControlPassword" placeholder="Enter Duration">
												</div>
												<div class="form-group">
													<label>Lama Waktu Penyewaan</label>
													<input name="durasi_sewa" type="text" class="form-control" id="exampleFormControlPassword" placeholder="Enter Duration">
												</div>
												<div class="form-group">
													<label>Biaya Operasional</label>
													<input name="biaya_ops" class="form-control" id="exampleFormControlPassword" placeholder="Enter Price">
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
													<button type="submit" class="btn btn-secondary btn-default" href="{{url('product')}}">Cancel</button>
												</div>
											</form>
										</div>
									</div>

    </div>
</div>

@endsection