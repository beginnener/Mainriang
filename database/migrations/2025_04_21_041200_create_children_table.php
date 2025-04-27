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
        Schema::create('children', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('nama_panggilan');
                $table->enum('jk', ['L', 'P']);
                $table->string('tempat_lahir')->nullable();
                $table->date('tanggal_lahir')->nullable();
                $table->string('NIK')->nullable();
                $table->string('agama')->nullable();
                $table->text('alamat')->nullable();
                $table->string('RT', 5)->nullable();
                $table->string('RW', 5)->nullable();
                $table->string('dusun')->nullable();
                $table->string('kelurahan')->nullable();
                $table->string('kecamatan')->nullable();
                $table->string('kode_pos')->nullable();
                $table->string('jenis_tinggal')->nullable();
                $table->string('alat_transportasi')->nullable();
                $table->string('lintang')->nullable();
                $table->string('bujur')->nullable();
                $table->float('berat_badan')->nullable();
                $table->float('tinggi_badan')->nullable();
                $table->float('lingkar_kepala')->nullable();
                $table->integer('jumlah_saudara')->nullable();
                $table->integer('anak_keberapa')->nullable();
                $table->float('jarak_ke_sekolah')->nullable();
                $table->string('akta_kelahiran')->nullable();
                $table->string('kartu_keluarga')->nullable();
                $table->unsignedBigInteger('mom_id')->nullable();
                $table->unsignedBigInteger('dad_id')->nullable();
                $table->unsignedBigInteger('guardian_id')->nullable();
                $table->timestamp('updated_at')->nullable('current_timestamp()');
                $table->timestamp('created_at')->nullable('current_timestamp()');
    
                $table->foreign('Mom_id')->references('id')->on('Moms');
                $table->foreign('dad_id')->references('id')->on('dads');
                $table->foreign('guardian_id')->references('id')->on('guardians');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
