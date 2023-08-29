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
        Schema::create('match_details', function (Blueprint $table) {
            $table->id();
            $table->string('home_scorer');
            $table->string('away_scorer');
            $table->string('yellow_card')->default(null);
            $table->string('red_card')->default(null);
            $table->integer('home_possession');
            $table->integer('home_shots');
            $table->integer('away_shots');
            $table->integer('home_target');
            $table->integer('away_target');
            $table->integer('home_pass');
            $table->integer('away_pass');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_details');
    }
};
