
@extends('layouts.main')
@section('content')
    <form action="/barang" method="post">
        @csrf
        <label for="kode">Kode</label>
        <input type="text" value="{{$kode}}" readOnly name="kode" id="kode" ><br>
        @error('kode') <p>{{ $message }}</p> <br>@enderror
        <label for="nama_barang">nama barang</label>
        <input type="text" name="nama_barang" id="nama_barang"><br>
        @error('nama_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="stok">stok</label>
        <input type="text" name="stok" id="stok"><br>
        @error('stok') <p>{{ $message }}</p> <br>@enderror
        <label for="harga_barang">harga barang</label>
        <input type="text" name="harga_barang" id="harga_barang"><br>
        @error('harga_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="jenis_barang">jenis barang</label>
        <input type="text" name="jenis_barang" id="jenis_barang"><br>
        @error('jenis_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="satuan_barang">satuan barang</label>
        <input type="text" name="satuan_barang" id="satuan_barang"><br>
        @error('satuan_barang') <p>{{ $message }}</p> <br>@enderror
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection