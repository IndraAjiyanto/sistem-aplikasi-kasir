<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('pengguna.index',[
            'penggunas' => User::where('username', '!=', 'admin')->get()    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'username' => ['required','unique:users'],
            'password' => 'required'
        ]);   

        // $request->session()->flash('success', 'Berhasil menambahkan pengguna');
        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        return redirect('/pengguna');
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
        return view('pengguna.edit', [
            'pengguna' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = ([
            'nama' => 'required',
            // 'username' => 'required|unique:users',
            'password' => 'required'
        ]);   

        $pengguna = User::find($id);

        if($request->username != $pengguna->username){
            $rules['username'] = ['required','unique:users'];
        }

        $validate = $request->validate($rules);
        User::where('id',$id)->update($validate);
        return redirect('/pengguna');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy('id',$id);
        return redirect('/pengguna');
    }
}
