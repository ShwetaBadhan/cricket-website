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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();

            $table->string('player_name');
            $table->string('player_image')->nullable();

            $table->integer('base_price');
            $table->integer('current_bid')->nullable();

            $table->string('highest_bidder')->nullable();

            $table->enum('status', ['upcoming', 'live', 'sold', 'unsold'])->default('upcoming');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};
