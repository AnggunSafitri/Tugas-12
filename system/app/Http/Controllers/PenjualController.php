<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;

class PenjualController extends Controller
{
    public function index()
    {
        $data['list_penjual'] = Penjual::all();
        return view('backview.penjual.index', $data);
    }

    public function create()
    {
        return view('backview.penjual.create');
    }

    public function store(Request $request)
    {
        $penjual = New Penjual;
        $penjual->nama_penjual = request('nama_penjual');
        $penjual->username = request('username');
        $penjual->password = bcrypt(request('password'));
        $penjual->nama_toko = request('nama_toko');
        $penjual->email = request('email');
        $penjual->no_handphone = request('no_handphone');
        $penjual->save();

        return redirect('admin/penjual')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Penjual $penjual)
    {
        $data['penjual'] = $penjual;
        return view('backview.penjual.show', $data);
    }

    public function edit(Penjual $penjual)
    {
        $data['penjual'] = $penjual;
        return view('backview.penjual.edit', $data);
    }

    public function update(Penjual $penjual)
    {
        $penjual->nama = request('nama_penjual');
        $penjual->username = request('username');
        $penjual->email = request('email');
        $penjual->no_handphone = request('no_handphone');
        $penjual->save();
        return redirect('admin/penjual')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($penjual)
    {
        Penjual::destroy($penjual);
        return redirect('admin/penjual')->with('danger', 'Data Berhasil Dihapus');
    }
}
