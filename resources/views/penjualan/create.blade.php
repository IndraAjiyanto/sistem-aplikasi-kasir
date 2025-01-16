@extends('layouts.main')
@section('content')
    <form action="/penjualan" method="post">
        @csrf
        <label for="kode transaksi">Kode Transaksi</label>
        <select class="form-select" name="kode_transaksi">
            <option selected>Pilih Transaksi</option>
            @foreach($transaksis as $transaksi)
                <option value="{{ $transaksi->kode }}">{{ $transaksi->pengguna->nama }}</option>
            @endforeach
        </select>
        @error('kode_transaksi') <p>{{ $message }}</p> <br>@enderror

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

        <label for="jumlah_beli">Jumlah Beli</label>
        <div style="display: flex; align-items: center;">
            <input type="number" name="jumlah_beli" id="jumlah_beli" style="margin-right: 10px;">
            <span id="satuan_beli">-</span>
        </div>
        @error('jumlah_beli') <p>{{ $message }}</p> <br>@enderror

        <label for="total_harga">Total Harga</label>
        <input type="text" name="total_harga" id="total_harga" readonly><br>
        @error('total_harga') <p>{{ $message }}</p> <br>@enderror

        <button type="submit" name="submit">Buat</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const kodeBarangSelect = document.getElementById('kode_barang');
            const jumlahBeliInput = document.getElementById('jumlah_beli');
            const totalHargaInput = document.getElementById('total_harga');
            const satuanBeliSpan = document.getElementById('satuan_beli');

            function updateSatuanAndCalculateTotal() {
                const selectedOption = kodeBarangSelect.options[kodeBarangSelect.selectedIndex];
                const hargaBarang = selectedOption.getAttribute('data-harga') || 0;
                const satuanBarang = selectedOption.getAttribute('data-satuan') || '-';
                const jumlahBeli = jumlahBeliInput.value || 0;

                satuanBeliSpan.textContent = satuanBarang; // Update satuan
                const totalHarga = hargaBarang * jumlahBeli;
                totalHargaInput.value = totalHarga; // Format dua desimal
            }

            kodeBarangSelect.addEventListener('change', updateSatuanAndCalculateTotal);
            jumlahBeliInput.addEventListener('input', updateSatuanAndCalculateTotal);
        });
    </script>
@endsection






