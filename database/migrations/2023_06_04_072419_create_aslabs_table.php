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
        Schema::create('aslabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lab_id');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
            $table->string('nim');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tanggal'); // Mengubah tipe data ke 'date'
            $table->string('alamat');
            $table->string('email');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aslabs');
    }
};
