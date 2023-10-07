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
        Schema::create('data_sets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dataset');
<<<<<<< HEAD
            $table->string('role');
=======
            $table->foreignId('role_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
>>>>>>> 84027788a1a8be87cf61766e8abbcb9b7ca82203
            $table->string('thead_html');
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
        Schema::dropIfExists('data_sets');
    }
};
