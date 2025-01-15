<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penjualan;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\User;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penjualan.index',[
            'penjualans' => Penjualan::all()   
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create',[
            'penjualans' => Penjualan::all(),
            'transaksis' => Transaksi::all(),
            'barangs' => Barang::all(),
            'penggunas' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode_transaksi' => 'required',
            'kode_barang' => 'required',
            'jumlah_beli' => 'required|integer',
            'total_harga' => 'required|integer'
        ]);

        Penjualan::create($validate);
        return redirect('/penjualan');
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
        return view('penjualan.edit', [
            'penjualan' => Penjualan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = ([
            'kode_transaksi' => 'required',
            'kode_barang' => 'required',
            'jumlah_beli' => 'required|integer',
            'total_harga' => 'required|integer'
        ]);   

        $validate = $request->validate($rules);
        Penjualan::where('id',$id)->update($validate);
        return redirect('/Penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::destroy('id',$id);
        return redirect('/penjualan');
    }
}
