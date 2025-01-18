
@extends('layouts.main')
@section('content')

@if(session()->has('success'))
<p>{{session('success')}}</p>
@endif
<a href="/penjualan/create">tambah penjualan</a>
<table border=1>
        <tr>
        <th>no</th>
        <th>kode transaksi</th>
        <th>kode barang</th>
        <th>jumlah beli</th>
        <th>total harga</th>
        <th>aksi</th>
        </tr>
        @foreach($penjualans as $penjualan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $penjualan->kode_transaksi }}</td>
            <td>{{ $penjualan->kode_barang }}</td>
            <td>{{ $penjualan->jumlah_beli }}</td>
            <td>{{ $penjualan->total_harga }}</td>
            <td>
                <a href="penjualan/{{$penjualan->id}}/edit">edit</a>
                <form action="penjualan/{{$penjualan->id}}" method="post">
                    @method('delete')
                    @csrf
                <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection