@extends('template.admin')
@section('base')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            Edit Data Penjual
                        </div>
                        <!-- form start -->
                        <form action="{{url('admin/penjual', $penjual->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama" value="{{$penjual->nama}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" value="{{$penjual->username}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Toko</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama toko" value="{{$penjual->nama_toko}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email" value="{{$penjual->email}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_handphone" value="{{$penjual->no_handphone}}">
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button class="btn btn-info">Batal</button>
                                        <button class="btn btn-default float-right">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection