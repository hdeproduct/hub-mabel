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
        Schema::create('plan_visit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable()->default();
            $table->date('visit_date')->nullable();
            $table->string('city')->nullable()->default();
            $table->string('klpd')->nullable()->default(); // Kategori (Kementerian/Lembaga/Dinas)
            $table->string('institusi_kerja')->nullable()->default();
            $table->string('pic_phone', 20)->nullable()->default();
            $table->string('pic_position', 50)->nullable()->default();
            $table->enum('pic_role', ['Kepala', 'Staff'])->nullable();
            $table->string('satuan_kerja')->nullable()->default();
            $table->timestamp('created_at')->nullable();
            $table->string('pic_name')->nullable()->default();
            $table->string('visit_image')->nullable()->default();
            $table->enum('status_visit', ['Not Visited', 'Visited', 'Negosiasi', 'Fup Lead', 'Reschedule', 'Stay Office'])->nullable()->default('Not Visited');
            $table->date('reschedule_date')->nullable();
            $table->enum('status_market', ['Cold', 'Warm', 'Hot'])->nullable()->default('Cold');
            $table->text('descriptions')->nullable();
            $table->text('tindak_lanjut')->nullable();
            $table->string('kegiatan_status')->nullable()->default();
            $table->integer('no_visit_per_month')->nullable()->default();
            $table->string('status_ring')->nullable()->default();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_visit');
    }
};
