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
        Schema::create('databpo', function (Blueprint $table) {
            $table->id();
            $table->string('data_penasehat');
            $table->string('data_pembina');
            $table->string('data_ketua_umum');
            $table->string('data_wakil_ketua_umum');
            $table->string('data_sekretaris_umum');
            $table->string('data_bendahara_umum');
            $table->string('data_keanggotaan');
            $table->string('data_kordinator_ibu_ibu');
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
        Schema::dropIfExists('databpo');
    }
};