
@extends('layouts.main')
@section('content')
<a href="/transaksi/create">tambah stok</a>
<table border=1>
        <tr>
        <th>no</th>
        <th>kode transaksi</th>
        <th>pengguna</th>
        <th>tanggal</th>
        <th>total  bayar</th>
        <th>keterangan</th>
        <th>aksi</th>
        </tr>
        @foreach($transaksis as $transaksi)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaksi->kode }}</td>
            <td>{{ $transaksi->pengguna->nama }}</td>
            <td>{{ $transaksi->tanggal }}</td>
            <td>{{ $transaksi->total_bayar }}</td>
            <td>{{ $transaksi->keterangan }}</td>
            <td>
                <form action="/transaksi/{{$transaksi->kode}}" method="post">
                    @method('delete')
                    @csrf
                <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection