<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Barang;
use App\Models\Pemasok;
use App\Models\User;

class Barang_Masuk extends Model
{
    use HasFactory;

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
    public function pemasok(){
        return $this->belongsTo(Pemasok::class);
    }
    public function pengguna(){
        return $this->belongsTo(User::class);
    }
}
