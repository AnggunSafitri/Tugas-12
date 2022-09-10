@extends('template.admin')
@section('base')
<br>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Detail Data Produk
                        </div>
                        <div class="card-body">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>{{$produk->nama_produk}}</td>
                                </tr>

                                <tr>
                                    <td>Harga</td>
                                    <td>{{$produk->harga}}</td>
                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td>{{$produk->stok}}</td>
                                </tr>

                                <tr>
                                    <td>Kategori Produk</td>
                                    <td>{{$produk->kategori->nama_kategori}}</td>
                                </tr>

                                <tr>
                                    <td>Nama Penjual</td>
                                    <td>{{$produk->penjual->nama_penjual}}</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Produk</td>
                                    <td>{{$produk->tanggal_produksi}}</td>
                                </tr>

                               <tr>
                                <td>

                                    <img src="{{url("public/$produk->foto")}}" class="brand-image img-circle elevation-3" style="opacity: .8">
                                </td>
                               </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection