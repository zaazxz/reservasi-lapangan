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
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->uuid('field_id');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade'); // Data lapang
            $table->date('booking_date'); // Tanggal Booking
            $table->time('start_time'); // Jam Mulai
            $table->time('end_time'); // Jam Selesai
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->integer('total_price')->nullable(); // Rincian Harga
            $table->integer('dp_amount')->nullable(); // Total Downpayment
            $table->integer('remaining_amount')->nullable(); // Outstanding Balance
            $table->integer('total_payment');
            $table->timestamp('payment_deadline'); 
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
