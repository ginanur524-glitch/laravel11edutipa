<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tiket')->unique();
            $table->string('nama_film');
            $table->string('nama_pemesan');
            $table->string('kursi');
            $table->decimal('harga', 10, 2);
            $table->dateTime('jadwal_tayang');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
