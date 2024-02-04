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
            $table->string('room_user_name')->nullable();
            $table->string('room_user_email')->nullable();
            $table->string('room_user_phonenumber')->nullable();
            $table->string('room_number')->nullable();
            $table->string('room_title')->nullable();
            $table->string('room_sdate')->nullable();
            $table->string('room_edate')->nullable();
            $table->string('room_price')->nullable();
            $table->timestamps();
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
