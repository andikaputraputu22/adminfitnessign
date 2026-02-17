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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('price_4_sessions')->nullable();
            $table->unsignedBigInteger('price_8_sessions')->nullable();
            $table->unsignedBigInteger('price_16_sessions')->nullable();
            $table->unsignedBigInteger('price_24_sessions')->nullable();
            $table->text('certificate')->nullable();
            $table->text('specialist')->nullable();
            $table->text('description')->nullable();
            $table->string('level_class')->nullable();
            $table->integer('participants_number')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
