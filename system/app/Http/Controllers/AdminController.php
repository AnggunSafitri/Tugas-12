<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use App\Http\Controllers\API\AlamatResource;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('backview.index');
    }

    public function cekAlamat()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('backview.test-alamat', $data);
    }

   
}
