<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang_Masuk;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('stok.index',[
            'barang_masuks' => Barang_Masuk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang_trakhir = Barang_Masuk::latest()->first();
        if($barang_trakhir){
            $kode = $barang_trakhir->kode_barang_masuk + 1;
        }else{
            $kode = 1;
        }

        return view('stok.create',[
            'kode' => $kode,
            'barangs' => Barang::all(),
            'pemasoks' => Pemasok::all(),
            'penggunas' => Pengguna::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode_barang_masuk' => 'required',
            'kode_barang' => 'required',
            'id_pengguna' => 'required',
            'id_pemasok' => 'required',
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required',
            'harga_beli' => 'required|integer',
        ]);

        Barang_Masuk::create($validate);
        return redirect('/stok');
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
        return view('stok.edit',[
            'barang_masuks' => Barang_Masuk::where('kode_barang_masuk',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = ([
            'kode_barang' => 'required',
            'id_pengguna' => 'required',
            'id_pemasok' => 'required',
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required',
            'harga_beli' => 'required|integer',
        ]);   

        $barang = Barang_Masuk::where('kode_barang_masuk',$id)->first();

        if($request->kode_barang_masuk != $barang->kode_barang_masuk){
            $rules['kode_barang_masuk'] = 'required';
        }

        $validate = $request->validate($rules);
        Barang_Masuk::where('kode_barang_masuk',$id)->update($validate);
        return redirect('/stok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
