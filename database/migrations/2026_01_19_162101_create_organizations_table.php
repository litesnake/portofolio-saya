<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('year_range'); // 2025 - 2026
            $table->string('position');
            $table->string('institution');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('card_label')->nullable(); // DPM FILKOM
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
