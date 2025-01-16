@extends('layouts.main')
@section('content')
    <form action="/stok/{{$barang_masuk->kode_barang_masuk}}/edit" method="post">
        @method('put')
        @csrf
        <label for="kode">Kode</label>
        <input type="text" value="{{$barang_masuk->kode_barang_masuk}}" readOnly name="kode_barang_masuk" id="kode" ><br>
        @error('kode_barang_masuk') <p>{{ $message }}</p> <br>@enderror

        <label for="kode barang">Kode Barang</label>
        <select class="form-select" name="kode_barang" id="kode_barang">
            <option selected>Pilih Barang</option>
            @foreach($barangs as $barang)
                <option value="{{ $barang->kode }}" data-harga="{{ $barang->harga_barang }}" data-satuan="{{ $barang->satuan_barang }}">
                    {{ $barang->nama_barang }}
                </option>
            @endforeach
        </select>
        @error('kode_barang') <p>{{ $message }}</p> <br>@enderror

        <label for="id_pengguna">Pengguna</label>
        <select class="form-select" name="id_pengguna" id="id_pengguna">
            <option selected>Pilih Pengguna</option>
            @foreach($penggunas as $pengguna)
                <option value="{{ $pengguna->kode }}" data-harga="{{ $pengguna->harga_pengguna }}" data-satuan="{{ $pengguna->satuan_pengguna }}">
                    {{ $pengguna->nama_barang }}
                </option>
            @endforeach
        </select>
        @error('id_pengguna') <p>{{ $message }}</p> <br>@enderror

        <label for="nama_barang">nama barang</label>
        <input type="text" name="nama_barang" id="nama_barang"><br>
        @error('nama_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="stok">stok</label>
        <input type="text" name="stok" id="stok"><br>
        @error('stok') <p>{{ $message }}</p> <br>@enderror
        <label for="harga_barang">harga barang</label>
        <input type="text" name="harga_barang" id="harga_barang"><br>
        @error('harga_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="jenis_barang">jenis barang</label>
        <input type="text" name="jenis_barang" id="jenis_barang"><br>
        @error('jenis_barang') <p>{{ $message }}</p> <br>@enderror
        <label for="satuan_barang">satuan barang</label>
        <input type="text" name="satuan_barang" id="satuan_barang"><br>
        @error('satuan_barang') <p>{{ $message }}</p> <br>@enderror
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection