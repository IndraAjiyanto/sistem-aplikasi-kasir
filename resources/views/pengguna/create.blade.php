
@extends('layouts.main')
@section('content')
    <form action="/pengguna" method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" ><br>
        @error('nama') <p>{{ $message }}</p> <br>@enderror
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        @error('username') <p>{{ $message }}</p> <br>@enderror
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection