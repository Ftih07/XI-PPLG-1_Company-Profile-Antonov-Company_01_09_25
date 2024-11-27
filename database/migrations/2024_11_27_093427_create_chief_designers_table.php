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
        Schema::create('chief_designers', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // Nama Chief Designer
            $table->string('period');        // Periode (misalnya: 1946–1984)
            $table->string('image')->nullable(); // Gambar Chief Designer
            $table->text('description');     // Deskripsi singkat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chief_designers');
    }
};
