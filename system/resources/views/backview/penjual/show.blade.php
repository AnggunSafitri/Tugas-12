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
                            Detail Data Penjual
                        </div>
                        <div class="card-body">
                            <h3>{{$penjual->nama}}</h3>
                            <hr>
                            <p>
                                {{$penjual->username}} |
                                Email : {{$penjual->email}}
                                {{$penjual->nama_toko}}
                                {{$penjual->no_handphone}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>


@endsection