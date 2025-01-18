
@extends('layouts.main')
@section('content')
<a href="/stok/create">tambah stok</a>
<table border=1>
        <tr>
        <th>no</th>
        <th>kode stok</th>
        <th>kode barang</th>
        <th>pengguna</th>
        <th>pemasok</th>
        <th>jumlah masuk</th>
        <th>tanggal masuk</th>
        <th>harga</th>
        <th>aksi</th>
        </tr>
        @foreach($barang_masuks as $barang_masuk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $barang_masuk->kode_barang_masuk }}</td>
            <td>{{ $barang_masuk->kode_barang }}</td>
            <td>{{ $barang_masuk->pengguna->nama }}</td>
            <td>{{ $barang_masuk->id_pemasok }}</td>
            <td>{{ $barang_masuk->jumlah_masuk }}</td>
            <td>{{ $barang_masuk->tanggal_masuk }}</td>
            <td>{{ $barang_masuk->harga_beli }}</td>
            <td>
                <a href="stok/{{$barang_masuk->id}}/edit">edit</a>
                    @csrf
                <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection