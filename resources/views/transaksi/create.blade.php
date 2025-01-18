@extends('layouts.main')
@section('content')
    <form action="/transaksi" method="post">
        @csrf
        <label for="kode">Kode</label>
        <input type="text" value="{{$kode}}" readOnly name="kode" id="kode" ><br>
        @error('kode') <p>{{ $message }}</p> <br>@enderror

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

        <label for="tanggal">tanggal</label>
        <input type="date" name="tanggal" id="tanggal"><br>
        @error('tanggal') <p>{{ $message }}</p> <br>@enderror
        <label for="total_bayar">total bayar</label>
        <input type="text" readOnly name="total_bayar" id="total_bayar" value="0"><br>
        @error('total_bayar') <p>{{ $message }}</p> <br>@enderror
        <label for="keterangan">keterangan</label>
        <input type="text" name="keterangan" id="keterangan"><br>
        @error('keterangan') <p>{{ $message }}</p> <br>@enderror
        <button type="submit" name="submit">Buat</button>
    </form>
@endsection