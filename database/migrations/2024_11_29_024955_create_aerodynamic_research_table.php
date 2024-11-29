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
        Schema::create('aerodynamic_research', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();
            $table->text('description')->nullable();
            $table->string('img')->required();  // Kolom gambar
            $table->integer('section');         // Menandakan section (sec-01, sec-02, dll)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aerodynamic_research');
    }
};
    