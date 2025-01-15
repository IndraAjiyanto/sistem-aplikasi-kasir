<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Penjualan;
use App\Models\Barang_Masuk;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function penjualan(){
        return $this->hasMany(Penjualan::class);
    }

    public function barang_masuk(){
        return $this->hasMany(Barang_Masuk::class);
    }
}
