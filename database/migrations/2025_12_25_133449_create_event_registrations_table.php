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
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id', 11)->constrained('events')->onDelete('cascade')->nullable()->default();
            $table->string('event_name');
            $table->string('name');
            $table->string('company');
            $table->string('position');
            $table->string('location');
            $table->string('email');
            $table->string('phone');
            $table->string('info_source');
            $table->tinyInteger('instagram_follow')->nullable()->default(0);
            $table->timestamp('registration_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registrations');
    }
};
