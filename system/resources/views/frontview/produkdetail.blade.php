@extends('template.web')
@section('content')

    <section id="aa-catg-head-banner">
        <img src="{{ url('public') }}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Sock</h2>
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div class="simpleLens-big-image-container"><a
                                                        data-lens-image="{{ url("public/$produk->foto") }}"
                                                        class="simpleLens-lens-image">
                                                        <img src="{{ url("public/$produk->foto") }}"
                                                            class="simpleLens-big-image"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>{{ $produk->nama_produk }}</h3>
                                        <div class="aa-price-block">
                                            <span class="aa-product-view-price">Rp.
                                                {{ number_format($produk->harga) }}</span>
                                            <p class="aa-product-avilability">Status Barang :
                                                <span>{{ $produk->stok }}</span></p>
                                        </div>
                                        <p>Kaos kaki dengan ukuran yang pendek, cocok dipakai untuk jalan-jalan maupun pergi
                                            ke kampus. Dengan detail tambahan telinga kelinci yang terletak di depan kaos
                                            kaki dan ekor kelinci dibelakang semakin membuat kaos kaki ini kelihatan
                                            menarik.</p>
                                        <h4>Pilihan Warna</h4>
                                        <div class="aa-color-tag">
                                            <a href="#" class="aa-color-green"></a>
                                            <a href="#" class="aa-color-yellow"></a>
                                            <a href="#" class="aa-color-pink"></a>
                                            <a href="#" class="aa-color-black"></a>
                                            <a href="#" class="aa-color-white"></a>
                                        </div>
                                        <div class="aa-prod-quantity">
                                            <p class="aa-prod-category">
                                                Kategori: <a href="#">Kaos Kaki Pendek</a>
                                            </p>
                                        </div>
                                        {{-- <div class="aa-prod-view-bottom">
                                            <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                                            <a class="aa-add-to-cart-btn" href="#">Compare</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="panel panel-default aa-checkout-billaddress">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="">
                                            Data Checkout
                                        </a>
                                    </h4>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <input type="text" class="form-control" placeholder="Nama Pembeli">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <select name="" id="" class="form-control">
                                                    <option value=""> Pilih Jenis Kelamin</option>
                                                    <option value=""> Laki-laki</option>
                                                    <option value=""> Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <input type="email" placeholder="Email Address*" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <input type="tel" placeholder="Phone*" class="form-control">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="aa-checkout-single-bill">
                                                <textarea cols="8" rows="3" class="form-control">Address*</textarea>
                                            </div>
                                        </div>
                                    </div><br>
                                 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <select name="provinsi" class="form-control"
                                                onchange="gantiProvinsi(this.value)">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($list_provinsi as $provinsi)
                                                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                                @endforeach
                                            </select> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <select name="kabupaten" class="form-control" id="kabupaten"
                                                onchange="gantiKabupaten(this.value)">
                                                <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <select name="kecamatan" class="form-control" id="kecamatan"
                                                onchange="gantiKecamatan(this.value)">
                                                <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="aa-checkout-single-bill">
                                                <select name="desa" class="form-control" id="desa">
                                                    <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-warning"><span class="fa fa-check"></span> Checkout</button>
                                        </div>
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


@push('script')
    <script>
        function gantiProvinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                    console.log(item.nama)
                }
                $("#kabupaten").html(option)

            });
        }

        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                    console.log(item.nama)
                }
                $("#kecamatan").html(option)

            });
        }

        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                    console.log(item.nama)
                }
                $("#desa").html(option)

            });
        }
    </script>
@endpush
