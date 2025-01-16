<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barang.index',[
            'barangs' => Barang::paginate(2)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang_trakhir = Barang::latest()->first();
        if($barang_trakhir){
            $kode = $barang_trakhir->kode + 1;
        }else{
            $kode = 1;
        }
        return view('barang.create',[
            'kode' => $kode
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga_barang' => 'required|integer',
            'jenis_barang' => 'required',
            'satuan_barang' => 'required',
        ]);

        Barang::create($validate);
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
        return view('barang.edit',[
            'barang' => Barang::where('kode',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = ([
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga_barang' => 'required|integer',
            'jenis_barang' => 'required',
            'satuan_barang' => 'required',
        ]);   

        $barang = Barang::where('kode',$id)->first();

        if($request->kode != $barang->kode){
            $rules['kode'] = 'required';
        }

        $validate = $request->validate($rules);
        Barang::where('kode',$id)->update($validate);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::where('kode',$id)->delete();
        return redirect('/barang');
    }
}
