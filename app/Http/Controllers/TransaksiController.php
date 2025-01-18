<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaksi;
use App\Models\User;
use App\Models\Penjualan;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualans = Penjualan::all();

        return view("transaksi.index",[
            'transaksis' => Transaksi::all(),
            'penjualans' => Penjualan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transasi_terkahir = Transaksi::latest()->first();
        if($transasi_terkahir){
            $kode = $transasi_terkahir->kode + 1;
        }else{
            $kode = 1;
        }
        return view('transaksi.create',[
            'kode' => $kode,
            'penggunas' => User::where('username', '!=', 'admin')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode' => 'required',
            'id_pengguna' => 'required',
            'tanggal' => 'required',
            'total_bayar' => 'required|integer',
            'keterangan' => 'required'
        ]);

        Transaksi::create($validate);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transaksi::where('kode',$id)->delete();
        return redirect('/transaksi');
    }
}
