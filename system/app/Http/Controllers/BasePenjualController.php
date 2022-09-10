<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasePenjualController extends Controller
{
    
    public function index()
    {
        return view('penjual.index');
    }

   
}
