<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colour_settings', function (Blueprint $table) {
            $table->id();                                                                                  
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->json('gradient_colors')->nullable();
            $table->string('light_color1')->nullable();
            $table->string('light_color2')->nullable();
            $table->string('primary_button_color')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colour_settings');
    }
};
