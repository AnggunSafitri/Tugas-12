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
                            Alamat
                            </div>
                            <!-- form start -->

                            <div class="form-horizontal">

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Provinsi</label>
                                        <div class="col-sm-10">
                                            <select name="" class="form-control"
                                                onchange="gantiProvinsi(this.value)">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($list_provinsi as $provinsi)
                                                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                                        <div class="col-sm-10">
                                            <select name="kabupaten" class="form-control" id="kabupaten"
                                                onchange="gantiKabupaten(this.value)">
                                                <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kecamatan</label>
                                        <div class="col-sm-10">
                                            <select name="kecamatan" class="form-control" id="kecamatan"
                                                onchange="gantiKecamatan(this.value)">
                                                <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Desa</label>
                                        <div class="col-sm-10">
                                            <select name="desa" class="form-control" id="desa">
                                                <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="card-footer">
                                        <button class="btn btn-info">Batal</button>
                                        <button class="btn btn-default float-right">Simpan</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
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
