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
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->decimal('temperature', 8, 2)->nullable();
            $table->decimal('windspeed', 8, 2)->nullable();
            $table->integer('winddirection')->nullable();
            $table->boolean('is_day')->default(false);
            $table->integer('weathercode')->nullable();
            $table->timestamp('weather_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather');
    }
};
