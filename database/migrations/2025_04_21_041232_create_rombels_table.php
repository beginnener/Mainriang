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
        Schema::create('rombels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_loc');
            $table->unsignedBigInteger('id_prog');
            $table->timestamps();

            $table->foreign('id_loc')->references('id')->on('locations');
            $table->foreign('id_prog')->references('id')->on('programs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rombels');
    }
};
