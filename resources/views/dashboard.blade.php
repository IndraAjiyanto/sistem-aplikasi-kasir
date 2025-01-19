@extends('layouts.main')
@section('content')

@auth
<h4>Barang : {{$barang}}</h4>
<h4>Pemasok : {{$pemasok}}</h4>
@can('admin')
<h4>Pengguna : {{$pengguna}}</h4>
@endcan
<h4>Transaksi : {{$transaksi}}</h4>
@else
@endauth

@endsection