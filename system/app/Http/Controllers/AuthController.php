<?php  

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Penjual;

class AuthController extends Controller
{
    function login(){
        return view('backview.login');
    }

    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin')->with('success', 'Selamat Datang');
        }

        if (auth()->guard('penjual')->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('penjual')->with('success', 'Selamat Datang');
        }
        return redirect('login')->with('success', 'Password Yang Anda Masukkan Salah');
    }

    public function logout(){
        auth()->logout();
		auth()->guard('penjual')->logout();
        return redirect('login');
    }

}