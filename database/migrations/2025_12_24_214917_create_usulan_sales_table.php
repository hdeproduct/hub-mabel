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
        Schema::create('usulan_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id', 11)->constrained('users');
            $table->string('request_produk');
            $table->text('spesifikasi');
            $table->integer('vol');
            $table->decimal('harga_satuan', 15, 2);
            $table->decimal('total', 15, 2)->storedAs('vol * harga_satuan')->nullable();
            $table->string('gambar');
            $table->string('referensi_ekatalog')->nullable()->default();
            $table->string('referensi_tokped')->nullable()->default();
            $table->enum('status', ['On Going', 'Pending', 'Decline', 'Success'])->nullable()->default('Pending');
            $table->timestamp('created_at')->nullable();
            $table->string('nama_dinas_user');
            $table->foreignId('code_usulan', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_sales');
    }
};
