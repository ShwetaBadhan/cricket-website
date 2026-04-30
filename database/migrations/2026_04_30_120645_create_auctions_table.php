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

            $table->decimal('base_price', 10, 2);
            $table->decimal('winning_bid', 10, 2)->nullable();

            $table->enum('category', ['capped', 'uncapped']);

            $table->enum('result', ['sold', 'unsold'])->nullable(); 

            $table->boolean('is_active')->default(true); 

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
