<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_informasi_publiks', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('no_ktp');
            $table->string('foto_ktp');
            $table->string('nomor_pengesahaan')->nullable();
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->longText('rincian');
            $table->longText('tujuan');
            $table->string('status')->default('Menunggu verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan_informasi_publiks');
    }
};
