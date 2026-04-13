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
        Schema::create('selection_processes', function (Blueprint $table) {
            $table->id();
            $table->string('step_1');
            $table->string('step_2');
            $table->string('step_3');
            $table->string('step_4');
            $table->string('step_5');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selection_processes');
    }
};
