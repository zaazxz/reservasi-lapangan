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
            $table->uuid('id')->primary();
            $table->uuid('field_id');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->date('booking_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->unsignedTinyInteger('dp_percentage')->default(15);
            $table->integer('total_price')->nullable();
            $table->integer('dp_amount')->nullable();
            $table->integer('remaining_amount')->nullable();
            $table->boolean('is_dp_paid')->default(false);
            $table->boolean('is_fully_paid')->default(false);
            $table->timestamp('dp_deadline');
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
