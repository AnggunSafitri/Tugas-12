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
                            Tambah Data Penjual
                        </div>
                        <!-- form start -->
                        <form action="{{url('admin/penjual')}}" method="POST">
                            @csrf
                            <div class="form-horizontal">

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Penjual</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama" name="nama_penjual">
                                        </div>
                                    </div>

                              
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Username" name="username">
                                        </div>
                                    </div>
                              
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                    </div>
                               
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Toko</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Toko" name="nama_toko">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>

                               
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="no handphone" name="no_handphone">
                                        </div>
                                    </div>

                               
                                <div class="card-footer">
                                    <button class="btn btn-info">Batal</button>
                                    <button class="btn btn-default float-right">Simpan</button>
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