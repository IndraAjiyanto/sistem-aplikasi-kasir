
@extends('layouts.main')
@section('content')
    <form action="/pemasok/{{$pemasok->id}}" method="post">
        @method('put')
        @csrf
        <label for="nama supplier">nama supplier</label>
        <input type="text" name="nama_supplier" id="nama_supplier" value="{{$pemasok->nama_supplier}}"><br>
        @error('nama_supplier') <p>{{ $message }}</p> <br>@enderror
        <label for="no_telp">no telp</label>
        <input type="text" name="no_telp" id="no_telp" value="{{$pemasok->no_telp}}"><br>
        @error('no_telp') <p>{{ $message }}</p> <br>@enderror
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{$pemasok->alamat}}"><br>
        @error('alamat') <p>{{ $message }}</p> <br>@enderror
        <label for="keterangan">keterangan</label>
        <input type="text" name="keterangan" id="keterangan" value="{{$pemasok->keterangan}}"><br>
        @error('keterangan') <p>{{ $message }}</p> <br>@enderror
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection