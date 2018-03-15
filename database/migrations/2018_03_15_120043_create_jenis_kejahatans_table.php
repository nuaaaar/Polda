<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisKejahatansTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_kejahatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jenis_kejahatan');
            $table->string('icon_jenis_kejahatan');
            $table->text('deskripsi');
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
        Schema::dropIfExists('jenis_kejahatans');
    }
}