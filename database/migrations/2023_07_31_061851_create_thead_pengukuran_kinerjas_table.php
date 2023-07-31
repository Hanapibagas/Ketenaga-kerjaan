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
        Schema::create('thead_pengukuran_kinerjas', function (Blueprint $table) {
            $table->id();
            $table->string('indikator');
            $table->string('bidang');
            $table->string('tahun');
            $table->string('a');
            $table->string('b');
            $table->string('hasil');
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
        Schema::dropIfExists('thead_pengukuran_kinerjas');
    }
};
