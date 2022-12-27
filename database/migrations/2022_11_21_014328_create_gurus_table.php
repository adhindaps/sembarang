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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('fotoguru')->default('def.jpg');
            $table->string('nama');
            $table->string('nip');
            $table->string('tmplahir');
            $table->string('tgllahir');
            $table->string('status_id')->nullable();
            $table->string('jabatan_id')->nullable();
            $table->string('subjabatan_id')->nullable();
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
        Schema::dropIfExists('gurus');
    }
};
