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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->enum('selected_by_role', ['user', 'admin', 'all_role']);
            $table->enum('status', ['Cold', 'Warm', 'Hot']);
            $table->text('text');
            $table->foreignId('created_by', 11)->constrained('users')->onDelete('cascade');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
