<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProfiles extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'nama_lengkap',
        'alamat_lengkap',
        'email',
        'no_telp',
        'no_polisi'

    ];
}
