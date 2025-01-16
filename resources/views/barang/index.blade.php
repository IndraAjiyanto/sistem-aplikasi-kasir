
@extends('layouts.main')
@section('content')
<a href="/barang/create">tambah barang</a>
<table border=1>
        <tr>
        <th>no</th>
        <th>kode</th>
        <th>nama barang</th>
        <th>stok</th>
        <th>harga barang</th>
        <th>jenis barang</th>
        <th>satuan brang</th>
        <th>aksi</th>
        </tr>
        @foreach($barangs as $barang)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $barang->kode }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->harga_barang }}</td>
            <td>{{ $barang->jenis_barang }}</td>
            <td>{{ $barang->satuan_barang }}</td>
            <td>
                <a href="barang/{{$barang->kode}}/edit">edit</a>
                <form action="barang/{{$barang->kode}}" method="post">
                    @method('delete')
                    @csrf
                <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $barangs->links() }}
@endsection