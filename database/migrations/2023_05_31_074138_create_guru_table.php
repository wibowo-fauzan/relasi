<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('nama');
            $table->string('guru_bk');
            $table->string('jadwal_pertemuan_murid');
            $table->string('tema_masalah');
            $table->text('solusi_masalah');
            $table->text('keterangan_pertemuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gurus');
    }
};