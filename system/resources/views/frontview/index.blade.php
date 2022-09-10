@extends('template.web')
@section('content')
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ url('public') }}/img/slider/1.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Diskon Sampai Dengan 50%</span>
                            <h2 data-seq>Koleksi Wanita</h2>
                            <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                                SEKARANG</a>
                        </div>
                    </li>
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ url('public') }}/img/slider/2.jpg"
                                alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Hadir Dengan Diskon</span>
                            <h2 data-seq>Koleksi Terlaris</h2>
                            <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                                SEKARANG</a>
                        </div>
                    </li>
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ url('public') }}/img/slider/3.jpg"
                                alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Koleksi Barang Terbaru</span>
                            <h2 data-seq>Koleksi Terbaru</h2>
                            <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                                SEKARANG</a>
                        </div>
                    </li>
                </ul>
            </div>
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span
                        class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">Produk</a></li>
                                <li><a href="#women" data-toggle="tab">Banyak Dicari</a></li>
                                <li><a href="#sports" data-toggle="tab">Terbaru</a></li>
                                <li><a href="#electronics" data-toggle="tab">Paling Digemari</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">
                                        @foreach ($list_produk as $produk)
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"> <img
                                                            src="{{ url("public/$produk->foto") }}"
                                                            class="brand-image img-circle elevation-3"
                                                            style="opacity: .8"></a>
                                                    <a class="aa-add-card-btn" href="{{url("produkdetail/$produk->id")}}"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title">
                                                            <a href="#">
                                                                {{ $produk->nama_produk }}
                                                            </a>
                                                        </h4>
                                                        <span class="aa-product-price">{{ $produk->harga }}</span>
                                                        <span class="aa-product-price">
                                                            | {{ $produk->stok }} Ready
                                                        </span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span
                                                            class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <span class="aa-badge aa-sale" href="#"> Nama
                                                    Kategori</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Jelajahi semua Produk <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection