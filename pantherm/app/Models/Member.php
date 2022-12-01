<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable =
    [
        'status_members',
        'nama_lengkap',
        'email',
        'password',
        'no_punggung',
        'nama_korwil',
        'jenis_kelamin',
        'ukuran_baju',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_menikah',
        'alamat_lengkap',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'kabupaten_kota',
        'no_telp',
        'no_whatsapp',
        'kontak_darurat',
        'no_telp_kantor',
        'pekerjaan',
        'nama_perusahaan',
        'alamat_perusahaan',
        'sekolah_universitas',
        'no_ktp',
        'no_sim',
        'type_kendaraan',
        'tahun_kendaraan',
        'no_polisi',
        'warna_kendaraan',
        'no_chasis',
        'no_engine',
        'tanggal_pajak',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token ',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}