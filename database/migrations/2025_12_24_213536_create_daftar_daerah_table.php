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
        Schema::create('daftar_daerah', function (Blueprint $table) {
            $table->string('kode', 4)->nullable()->default();
            $table->string('kabupaten_kota', 36)->primary();
            $table->string('provinsi', 26)->nullable()->default();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_daerah');
    }
};
