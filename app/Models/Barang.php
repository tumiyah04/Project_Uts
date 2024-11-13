<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    

    // Daftar kolom yang boleh diisi massal
    protected $fillable = ['nama', 'jumlah', 'deskripsi']; //
}
