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
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->string('phone_number');
            $table->string('email');
            $table->string('bukti_pembayaran');
            $table->integer('status');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('rombel_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('children');
            $table->foreign('rombel_id')->references('id')->on('rombels');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrants');
    }
};
