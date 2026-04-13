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
        Schema::create('required_documents', function (Blueprint $table) {
            $table->id();
            $table->string('main_title_1');
            $table->string('main_title_2');
            $table->string('main_title_3');
            $table->string('main_title_4');
            $table->string('sub_title_1');
            $table->string('sub_title_2');
            $table->string('sub_title_3');
            $table->string('sub_title_4');
            $table->longText('small_card_1_description');
            $table->longText('small_card_2_description');
            $table->longText('small_card_3_description');
            $table->longText('small_card_4_description');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('required_documents');
    }
};
