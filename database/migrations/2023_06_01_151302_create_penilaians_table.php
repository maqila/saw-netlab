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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternatif_id');
            $table->unsignedBigInteger('normalisasi_id');
            $table->decimal('nilai', 5, 2);
            $table->timestamps();
            $table->foreign('alternatif_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreign('normalisasi_id')->references('id')->on('normalisasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
