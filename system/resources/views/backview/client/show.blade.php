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
                            Detail Data Client
                        </div>
                        <div class="card-body">
                            <h3>{{$client->nama}}</h3>
                            <hr>
                            <p>
                                {{$client->username}} |
                                Email : {{$client->email}}
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