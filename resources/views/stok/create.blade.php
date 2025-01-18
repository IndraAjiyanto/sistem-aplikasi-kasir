@extends('layouts.main')
@section('content')
    <form action="/stok" method="post">
        @csrf
        <label for="kode">Kode</label>
        <input type="text" value="{{$kode}}" readOnly name="kode_barang_masuk" id="kode" ><br>
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
            <option value="{{ $pengguna->id }}">
                    {{ $pengguna->nama }}
                </option>
            @endforeach
        </select>
        @error('id_pengguna') <p>{{ $message }}</p> <br>@enderror

        <label for="jumlah_masuk">jumlah masuk</label>
        <input type="text" name="jumlah_masuk" id="jumlah_masuk"><br>
        @error('jumlah_masuk') <p>{{ $message }}</p> <br>@enderror
        <label for="tanggal_masuk">tanggal masuk</label>
        <input type="text" name="tanggal_masuk" id="tanggal_masuk"><br>
        @error('tanggal_masuk') <p>{{ $message }}</p> <br>@enderror
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