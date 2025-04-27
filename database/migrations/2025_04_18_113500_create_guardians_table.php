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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->String('NIK');
            $table->String('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->String('phone_number');
            $table->String('email');
            $table->String('jenjang_pendidikan');
            $table->String('penghasilan');
            $table->String('pekerjaan');
            $table->timestamp('updated_at')->nullable('current_timestamp()');
            $table->timestamp('created_at')->nullable('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
