@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Detail User</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            Data User
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Detail User</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-account-box-outline font-size-20"></i>
                        </div>
                        <h2>Informasi User</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row mb-4">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Username</label>
                                <h5 class="text-dark">{{$detail->username}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Nama</label>
                                <h5 class="text-dark">{{$detail->name}}</h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">No. KTP</label>
                                <h5 class="text-dark">{{$detail->KTP}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">No. Telp</label>
                                <h5 class="text-dark">{{$detail->no_phone}}</h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Email</label>
                                <h5 class="text-dark">{{$detail->email}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Alamat</label>
                                <h5 class="text-dark">{{$detail->location}}</h5>
                            </div>
                        </div>
                        <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                            <i class="mdi mdi-trash-can"></i>
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('user.destroy', [$detail -> id])}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>
                                Yakin mengahapus data {{ $detail -> name}}
                            </h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-pill" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger btn-pill">Ok</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
