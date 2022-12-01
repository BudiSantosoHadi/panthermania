<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'tb_product';
    protected $fillable = [

        'gambar_products',
        'nama_products',
        'keterangan',
        'harga_products',
        'kontak_admin',

    ];
}