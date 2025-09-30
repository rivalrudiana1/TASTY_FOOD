<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar_deskripsi')->nullable();
            $table->string('gambar_deskripsi_kiri')->nullable();
            $table->string('gambar_deskripsi_kanan')->nullable();
            $table->text('visi');
            $table->string('gambar_visi')->nullable();
            $table->string('gambar_visi_kiri')->nullable();
            $table->string('gambar_visi_kanan')->nullable();
            $table->text('misi');
            $table->string('gambar_misi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tentangs');
    }
};