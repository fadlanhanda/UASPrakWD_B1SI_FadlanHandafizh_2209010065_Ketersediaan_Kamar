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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nama pasien');
            $table->date('dob')->comment('Tanggal lahir pasien');
            $table->string('gender')->comment('Jenis kelamin pasien');
            $table->string('address')->comment('Alamat pasien');
            $table->string('phone')->comment('Nomor telepon pasien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
