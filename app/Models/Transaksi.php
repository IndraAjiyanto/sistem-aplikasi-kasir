<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Penjualan;

class Transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode';
    protected $guarded = [];

    public function pengguna(){
        return $this->belongsTo(User::class, 'id_pengguna');
    }

    public function penjualan(){
        return $this->hasMany(Penjualan::class);
    }
}
