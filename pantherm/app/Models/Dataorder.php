<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataorder extends Model
{
    use HasFactory;
    protected $table = 'dataorders';
    protected $fillable = [
        'size',
        'jumlah',
        'upload_bukti'
    ];
}