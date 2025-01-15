
@extends('layouts.main')
@section('content')
    <form action="/barang/{{$barang->kode}}" method="post">
        @method('put')
        @csrf
        <input type="hidden" readOnly name="kode" id="kode" value="{{$barang->kode}}"><br>
        @error('kode') <p>{{ $message }}</p> <br>@enderror
        <label for="nama_barang">nama barang</label>
        <input type="text" name="nama_barang" id="nama_barang" value="{{$barang->nama_barang}}"><br>
        @error('nama_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="stok">stok</label>
        <input type="text" name="stok" id="stok" value="{{$barang->stok}}"><br>
        @error('stok') <p>{{ $message }}</p> <br>@enderror
        <label for="harga_barang">harga barang</label>
        <input type="text" name="harga_barang" id="harga_barang" value="{{$barang->harga_barang}}"><br>
        @error('harga_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="jenis_barang">jenis barang</label>
        <input type="text" name="jenis_barang" id="jenis_barang" value="{{$barang->jenis_barang}}"><br>
        @error('jenis_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="satuan_barang">satuan barang</label>
        <input type="text" name="satuan_barang" id="satuan_barang" value="{{$barang->satuan_barang}}"><br>
        @error('satuan_barang') <p>{{ $message }}</p> <br>@enderror
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection