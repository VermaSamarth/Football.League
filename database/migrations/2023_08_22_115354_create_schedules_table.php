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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('home_id');
            $table->integer('away_id');
            $table->date('match_date');
            $table->string('venue');
            $table->integer('home_goals')->nullable();
            $table->integer('away_goals')->nullable();
            $table->string('referee1');
            $table->string('referee2');
            $table->integer('status')->default(0);
            $table->integer('winner_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
