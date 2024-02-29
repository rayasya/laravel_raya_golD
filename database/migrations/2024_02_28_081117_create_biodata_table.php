<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama_mhs');
            $table->enum('prodi_mhs', ['TIF', 'MIF', 'TKK'])->default('TIF');
            $table->text('alamat_mhs');
            $table->string('no_telp');
            $table->date('ttl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
