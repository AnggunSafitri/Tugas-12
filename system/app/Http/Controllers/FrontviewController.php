<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\API\AlamatResource;

class FrontviewController extends Controller
{
    
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.index', $data);
    }

    public function account()
    {
        return view('frontview.account');
    }


    public function produk()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.produk', $data);
    }

    public function produkdetail(Produk $produk)
    {
        $data['produk'] = $produk;
        $data['list_provinsi'] = Provinsi::all();
        return view('frontview.produkdetail', $data);
    }

    public function testCollection()
    {
        $data['list_produk'] = Produk::all();

       return view('test-collection', $data);
    }
   
}
