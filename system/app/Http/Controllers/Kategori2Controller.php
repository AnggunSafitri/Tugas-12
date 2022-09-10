<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class Kategori2Controller extends Controller
{
    
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('penjual.kategori.index', $data);
    }

    
    public function create()
    {
        return view('penjual.kategori.create');
    }

    
    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Di simpan');

    }

   
    public function show(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('penjual.kategori.show', $data);
    }

    public function edit(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('penjual.kategori.edit', $data);
    }

   
    public function update(Kategori $kategori)
    {
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
