
@extends('layouts.main')
@section('content')
<a href="/pengguna/create">tambah pengguna</a>
<table border=1>
        <tr>
        <th>no</th>
        <th>nama</th>
        <th>username</th>
        <th>aksi</th>
        </tr>
        @foreach($penggunas as $pengguna)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pengguna->nama }}</td>
            <td>{{ $pengguna->username }}</td>
            <td>
                <a href="/pengguna/{{$pengguna->id}}/edit">edit</a>
                <form action="pengguna/{{$pengguna->id}}" method="post">
                    @method('delete')
                    @csrf
                <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection