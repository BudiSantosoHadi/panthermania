<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorwildataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korwildata', function (Blueprint $table) {
            $table->id();
            $table->string('logo_image');
            $table->string('nama_chapter')->nullable();
            $table->string('nama_korwil');
            $table->string('nama_provinsi');
            $table->string('nama_kabupaten');
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
        Schema::dropIfExists('korwildata');
    }
}