<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendak extends Model
{
    use HasFactory;
    protected $table = 'agendak';
    protected $fillable = [
        'images',
        'nama_agendak',
        'nama_chapter',
        'nama_korwil',
        'keterangan',

    ];
}