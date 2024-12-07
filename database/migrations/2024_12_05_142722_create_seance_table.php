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
        Schema::create('seance', function (Blueprint $table) {
            $table->id();
            $table->integer('hall_id');
            /*$table->foreign('halls_id')->references('id')->on('halls');*/
            $table->integer('film_id');
            /*$table->foreign('films_id')->references('id')->on('films');*/
            $table->dateTime('start_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seance');
    }
};
