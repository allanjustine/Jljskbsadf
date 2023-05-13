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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('music_bar_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('event_name');
            $table->string('event_location');
            $table->string('event_date');
            $table->string('event_time_start');
            $table->string('event_time_end');
            $table->longText('event_details');
            $table->string('booking_status');
            $table->timestamps();

            $table->foreign('music_bar_id')->references('id')->on('music_bars')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
