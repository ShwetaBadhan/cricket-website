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
        Schema::create('home_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->string('image')->nullable();
            // Small Feature Cards (4 cards)
            $table->string('small_card_1_image')->nullable();
            $table->string('small_card_1_title');
            $table->string('small_card_1_description');

            $table->string('small_card_2_image')->nullable();
            $table->string('small_card_2_title');
            $table->string('small_card_2_description');

            $table->string('small_card_3_image')->nullable();
            $table->string('small_card_3_title');
            $table->string('small_card_3_description');

            $table->string('small_card_4_image')->nullable();
            $table->string('small_card_4_title');
            $table->string('small_card_4_description');

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_benefits');
    }
};
