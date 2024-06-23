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
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade')->comment('ID pasien');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade')->comment('ID kamar');
            $table->date('check_in')->comment('Tanggal check-in pasien');
            $table->date('check_out')->nullable()->comment('Tanggal check-out pasien');
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
