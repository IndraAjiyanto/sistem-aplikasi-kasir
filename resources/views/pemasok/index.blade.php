
@extends('layouts.main')
@section('content')
<a href="/pemasok/create">tambah pemasok</a>
<table border=1>
        <tr>
        <th>no</th>
        <th>nama Supplier</th>
        <th>no telp</th>
        <th>alamat</th>
        <th>keterangan</th>
        <th>aksi</th>
        </tr>
        @foreach($pemasoks as $pemasok)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pemasok->nama_supplier }}</td>
            <td>{{ $pemasok->no_telp }}</td>
            <td>{{ $pemasok->alamat }}</td>
            <td>{{ $pemasok->keterangan }}</td>
            <td>
                <a href="pemasok/{{$pemasok->id}}/edit">edit</a>
                <form action="pemasok/{{$pemasok->id}}" method="post">
                    @method('delete')
                    @csrf
                <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection