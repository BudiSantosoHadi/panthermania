<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('photos_members')->nullable();
            $table->string('photos_ktp')->nullable();
            $table->string('photos_bukti_tranfer')->nullable();
            $table->string('photos_sim')->nullable();
            $table->string('photos_stnk')->nullable();
            $table->string('status_members')->nullable();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('password');
            $table->string('no_punggung')->nullable();
            $table->string('nama_korwil')->nullable();
            $table->string('jenis_kelamin');
            $table->string('ukuran_baju');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('status_menikah');
            $table->text('alamat_lengkap');
            $table->text('kelurahan');
            $table->text('kecamatan');
            $table->text('provinsi');
            $table->text('kabupaten_kota');
            $table->string('no_telp');
            $table->string('no_whatsapp');
            $table->string('kontak_darurat');
            $table->string('no_telp_kantor')->nullable();
            $table->string('pekerjaan');
            $table->string('nama_perusahaan')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('sekolah_universitas')->nullable();
            $table->string('no_ktp');
            $table->string('no_sim');
            $table->string('type_kendaraan');
            $table->date('tahun_kendaraan');
            $table->string('no_polisi');
            $table->string('warna_kendaraan');
            $table->string('no_chasis');
            $table->string('no_engine');
            $table->date('tanggal_pajak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};