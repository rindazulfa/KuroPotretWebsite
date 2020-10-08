@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">

        <h2 style="text-align: center; margin-bottom: 20px;">Tabel Daftar Produk</h2>
       
        <a href="{{url('tambahproduct')}}" class="btn btn-outline-primary btn-md text-uppercase" style="margin-bottom: 20px;" >
             Tambah Produk
        </a>
        <table id="basic-data-table" class="table nowrap" style="width:100%">
            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah Foto</th>
                    <th>Jumlah Edit</th>
                    <th>Durasi</th>
                    <th>Waktu Sewa</th>
                    <th>Biaya Oprasional</th>
                    <th>Menu</th>
                </tr>

            </thead>

            <tbody>
                @foreach($packages as $key)
                <tr>
                    <td>1</td>
                    <td>{{$key->name_pack}}</td>
                    <td>{{$key->price}}</td>
                    <td>{{$key->qty_photos}}</td>
                    <td>{{$key->qty_edit}}</td>
                    <td>{{$key->duration}}</th>
                    <td>{{$key->working_hours}}</td>
                    <td>{{$key->price_operational}}</td>
                    <td><button type="submit" class="btn btn-primary btn-default" style="background-color: darkorange; margin-right: 10px;">Edit</button><button type="submit" class="btn btn-primary btn-default" style="background-color: red;">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection