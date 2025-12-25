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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail');
            $table->string('event_name');
            $table->enum('event_type', ['online', 'offline']);
            $table->string('venue_name')->nullable()->default();
            $table->string('location_url', 512)->nullable()->default();
            $table->date('event_datetime');
            $table->text('description');
            $table->string('meeting_link', 512)->nullable()->default();
            $table->foreignId('created_by', 11)->nullable()->default();
            $table->enum('status', ['active', 'cancelled', 'completed'])->nullable()->default('active');
            $table->nullableTimestamps();
            $table->foreignId('invitation_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
