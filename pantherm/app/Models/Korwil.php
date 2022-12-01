<?php

namespace App\Models;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Korwil extends Model
{
    use HasFactory;
    protected $table = 'korwildata';
    protected $fillable =
    [
        'logo_image',
        'nama_korwil',
        'nama_chapter',
        'nama_provinsi',
        'nama_kabupaten',
    ];
}