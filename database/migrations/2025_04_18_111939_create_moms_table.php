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
        Schema::create('moms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->String('NIK')->nullable();
            $table->String('alamat')->nullable();
            $table->String('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->String('phone_number');
            $table->String('email')->nullable();
            $table->String('jenjang_pendidikan')->nullable();
            $table->String('penghasilan')->nullable();
            $table->String('pekerjaan')->nullable();
            $table->timestamp('updated_at')->nullable('current_timestamp()');
            $table->timestamp('created_at')->nullable('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moms');
    }
};
