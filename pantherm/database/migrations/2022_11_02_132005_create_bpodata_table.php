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
        Schema::create('bpodata', function (Blueprint $table) {
            $table->id();
            $table->string('data_penasehat')->nullable();
            $table->string('data_pembina')->nullable();
            $table->string('data_ketua_umum')->nullable();
            $table->string('data_wakil_ketua_umum')->nullable();
            $table->string('data_sekertaris_umum')->nullable();
            $table->string('data_bendahara_umum')->nullable();
            $table->string('data_keanggotaan')->nullable();
            $table->string('data_koordinator_ibu_ibu')->nullable();
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
        Schema::dropIfExists('bpodata');
    }
};
