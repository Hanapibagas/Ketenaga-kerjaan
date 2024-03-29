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
        Schema::create('pengukuran_kinerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengukuran');
            $table->foreignId('role_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('thead_html');
            $table->year('tahun');
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
        Schema::dropIfExists('pengukuran_kinerjas');
    }
};
