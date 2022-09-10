@extends('template.web')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ url('public') }}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Fashion</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                                @foreach ($list_produk as $produk)
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="{{url("produkdetail/$produk->id")}}"><img
                                                src="{{ url("public/$produk->foto") }}" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="{{url("produkdetail/$produk->id")}}"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="{{url("produkdetail/$produk->id")}}"> {{$produk->nama_produk}}</a></h4>
                                            <span class="aa-product-price"> {{$produk->harga}}</span><span
                                                class="aa-product-price"><del>Rp 10.000</del></span>
                                          
                                        </figcaption>
                                    </figure>
                                  
                                    <span class="aa-badge aa-sale" href="{{url("produkdetail/$produk->id")}}">SALE!</span>
                                </li>
                                @endforeach
                            </ul>
                           
                        </div>
                        <div class="aa-product-catg-pagination">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Baru-Baru Ini Dilihat</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    @foreach ($list_produk as $produk)
                                        <li>
                                            <a href="{{url("produkdetail/$produk->id")}}" class="aa-cartbox-img"><img alt="img"
                                                    src="{{ url("public/$produk->foto") }}"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="{{url("produkdetail/$produk->id")}}">{{ $produk->nama_produk }}</a></h4>
                                                <p> {{ $produk->harga }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- / product category -->
@endsection
