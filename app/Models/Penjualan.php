<?php

namespace App\Models;

use App\Models\Transaksi;
use App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
