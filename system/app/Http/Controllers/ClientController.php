<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $data['list_client'] = Client::all();
        return view('backview.client.index', $data);
    }

    public function create()
    {
        return view('backview.client.create');
    }

    public function store(Request $request)
    {
        $client = New Client;
        $client->nama = request('nama');
        $client->username = request('username');
        $client->email = request('email');
        $client->password = bcrypt(request('password'));
        $client->no_handphone = request('no_handphone');
        $client->save();

        return redirect('admin/client')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Client $client)
    {
        $data['client'] = $client;
        return view('backview.client.show', $data);
    }

    public function edit(Client $client)
    {
        $data['client'] = $client;
        return view('backview.client.edit', $data);
    }

    public function update(Client $client)
    {
        $client->nama = request('nama');
        $client->username = request('username');
        $client->email = request('email');
        $client->no_handphone = request('no_handphone');
        $client->save();
        return redirect('admin/client')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($client)
    {
        Client::destroy($client);
        return redirect('admin/client')->with('danger', 'Data Berhasil Dihapus');
    }
}
