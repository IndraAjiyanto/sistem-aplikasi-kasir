<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasok;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemasok.index',[
            'pemasoks' => Pemasok::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemasok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_supplier' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required'
        ]);

        Pemasok::create($validate);
        return redirect('/pemasok');
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
        return view('pemasok.edit', [
            'pemasok' => Pemasok::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = ([
            'nama_supplier' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required'
        ]);   

        $pemasok = Pemasok::find($id);

        $validate = $request->validate($rules);
        Pemasok::where('id',$id)->update($validate);
        return redirect('/pemasok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pemasok::destroy('id',$id);
        return redirect('/pemasok');
    }
}
