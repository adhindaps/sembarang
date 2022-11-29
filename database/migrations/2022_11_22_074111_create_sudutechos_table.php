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
        Schema::create('sudutechos', function (Blueprint $table) {
            $table->id();
            $table->string('fotoecho');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('link');
            $table->string('jam');
            $table->string('lokasi');
            $table->string('alamat');
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
        Schema::dropIfExists('sudutechos');
    }
};
