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
        Schema::create('request_visit', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('klpd');
            $table->string('institusi_kerja');
            $table->string('satuan_kerja');
            $table->foreignId('user_id', 11);
            $table->string('pic_name')->nullable()->default();
            $table->string('pic_phone', 20)->nullable()->default();
            $table->string('pic_position', 50)->nullable()->default();
            $table->enum('pic_role', ['Kepala', 'Staff'])->nullable();
            $table->string('status_ring', 20)->nullable()->default('RING 1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_visit');
    }
};
