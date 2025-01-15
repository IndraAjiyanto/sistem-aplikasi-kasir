
@extends('layouts.main')
@section('content')
    <form action="/pengguna/{{$pengguna->id}}" method="post">
    @method('put')
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{$pengguna->nama}}" ><br>
        @error('nama') <p>{{ $message }}</p> <br>@enderror
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{$pengguna->username}}" ><br>
        @error('username') <p>{{ $message }}</p> <br>@enderror
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{$pengguna->nama}}" 
        ><br>
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection