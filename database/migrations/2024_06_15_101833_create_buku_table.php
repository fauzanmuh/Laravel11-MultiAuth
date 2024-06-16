<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->integer('kode_buku');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('foto')->nullable();
            $table->string('deskripsi');
            $table->timestamps();
            $table->unique(array('kode_buku'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
