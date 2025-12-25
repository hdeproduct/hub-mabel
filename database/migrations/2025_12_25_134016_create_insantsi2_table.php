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
        Schema::create('insantsi2', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('klpd');
            $table->string('institusi_kerja');
            $table->string('satuan_kerja');
            $table->string('code_dinas')->nullable()->default();
            $table->string('pic_name')->nullable()->default();
            $table->string('pic_phone', 20)->nullable()->default();
            $table->string('pic_position', 50)->nullable()->default();
            $table->enum('pic_role', ['Kepala', 'Staff'])->nullable();
            $table->enum('status_market', ['Cold', 'Warm', 'Hot'])->nullable()->default('Cold');
            $table->string('status_ring')->nullable()->default();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insantsi2');
    }
};
