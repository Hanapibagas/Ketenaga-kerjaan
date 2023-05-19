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
        Schema::create('details_datasets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataset_id')->constrained('data_sets')->onDelete('cascade')->onUpdate('cascade');
            $table->string('variable');
            $table->date('tahun');
            $table->string('laki_laki');
            $table->string('perempuan');
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
        Schema::dropIfExists('details_datasets');
    }
};
