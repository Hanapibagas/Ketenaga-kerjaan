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
        Schema::create('metadata_variabels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_master_data');
            $table->string('klasifikasi');
            $table->string('no_hp');
            $table->string('no_ktp');
            $table->string('foto_ktp');
            $table->string('nomor_pengesahaan');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->longText('rincian');
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
        Schema::dropIfExists('metadata_variabels');
    }
};
