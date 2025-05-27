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
        Schema::create('karirs', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->nullable();
            $table->string('tempat')->nullable();
            $table->string('posisi')->nullable();
            $table->year('tahun_mulai')->nullable();
            $table->year('tahun_selesai')->nullable();
            $table->foreignId('alumni_id')->constrained('alumnis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karirs');
    }
};
