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
        Schema::create('home_work_sections', function (Blueprint $table) {
             $table->id();
            $table->text('main_title');
            $table->string('image')->nullable();
            $table->text('step_1');
            $table->longText('description_1');
            $table->text('step_2');
            $table->longText('description_2');
            $table->text('step_3');
            $table->longText('description_3');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_work_sections');
    }
};
