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
        Schema::create('game_matches', function (Blueprint $table) {
             $table->id();

            // Basic Info
            $table->string('title')->nullable();
            $table->string('sport_type'); // cricket, football, etc.
            $table->string('match_type')->nullable(); // league, final
            $table->string('match_status')->default('upcoming'); // upcoming, live, completed

            // Teams
            $table->string('team_1_name');
            $table->string('team_2_name');
            $table->string('team_1_logo')->nullable();
            $table->string('team_2_logo')->nullable();

            // Date & Time 
            $table->date('match_date');
            $table->time('match_time');
            $table->string('timezone')->nullable();

            // Venue
            $table->text('venue')->nullable();

            // Result (Common)
            $table->string('result_text')->nullable(); // "India won by 5 wickets"

            //  IMPORTANT (Flexible for all sports)
            $table->json('score_data')->nullable();

            // Media
            $table->string('video_link')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_matches');
    }
};
