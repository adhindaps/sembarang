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
        Schema::create('bkks', function (Blueprint $table) {
            $table->id();
            $table->string('fotobk');
            $table->string('perusahaan');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->text('deskperusahaan');
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
        Schema::dropIfExists('bkks');
    }
};
