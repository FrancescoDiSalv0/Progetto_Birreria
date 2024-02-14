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
        Schema::create('beer_brewery', function (Blueprint $table) {
            $table->id();
            // vincolo di integrità referenziale tra le birre e le birrerie
            $table->unsignedBigInteger('beer_id');
            $table->foreign('beer_id')->references('id')->on('beers');
            // 
            $table->foreignId('brewery_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beer_brewery');
    }
};
