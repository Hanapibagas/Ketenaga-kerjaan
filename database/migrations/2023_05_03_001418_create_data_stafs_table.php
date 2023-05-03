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
        Schema::create('data_stafs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('tempat_lahir');
            $table->string('tempat_melaksanakan_tugas');
            $table->string('pangkat');
            $table->string('golongan_ruang');
            $table->string('pendidikan');
            $table->string('tahun_lulus');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('etmis');
            $table->string('asal_daerah');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('data_stafs');
    }
};
