<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pemasok;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\User;


class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            "judul" => "login"
        ]);
    }

    public  function authentication(Request $request){
        $validate = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            $request->session()->flash('success', 'berhasillogin');
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'login gagal!');
    }

    public function dashboard(){
        return view('dashboard', [
            'barang' => Barang::count(),
            'pemasok' => Pemasok::count(),
            'pengguna' => User::where('username','!=','admin')->count(),
            'transaksi' => Transaksi::count()
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
