<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datauser extends Model
{
    use HasFactory;
    protected $table = 'datauser';
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'jenis_kelamin'

    ];
}
