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
        Schema::create('tourns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('n_dia');
            $table->foreingID('turno_manana')->references('id')->on('users');
            $table->foreingID('turno_tarde')->references('id')->on('users');
            $table->foreingID('turno_noche')->references('id')->on('users');
            $table->foreingID('week_id')->references('id')->on('weeks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourns');
    }
};
