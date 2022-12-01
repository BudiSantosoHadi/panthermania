<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpo extends Model
{
    use HasFactory;
    protected $table = 'databpo';
    protected $fillable = [
        'data_penasehat',
        'data_pembina',
        'data_ketua_umum',
        'data_wakil_ketua_umum',
        'data_sekretaris_umum',
        'data_bendahara_umum',
        'data_keanggotaan',
        'data_kordinator_ibu_ibu'
    ];
}