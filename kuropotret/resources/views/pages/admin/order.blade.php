@extends('pages.admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <h2 style="text-align: center;">Tabel Daftar Order</h2>
        <br>
        <table id="basic-data-table" class="table nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Deskripsi</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
            @foreach($transactions as $key)
                <tr>
                    <td>1</td>
                    <td>{{$key->name}}</td>
                    <td>{{$key->name_pack}}</td>
                    <td>{{$key->date}}</td>
                    <td>{{$key->location}}</td>
                    <td>{{$key->description}}</th>
                    <td>{{$key->total}}</td>
                   

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection