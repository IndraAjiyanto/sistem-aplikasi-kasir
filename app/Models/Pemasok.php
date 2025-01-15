<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Barang_Masuk;

class Pemasok extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function barang_masuk(){
        return $this->hasMany(Barang_Masuk::class);
    }
}
