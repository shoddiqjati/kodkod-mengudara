<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Listmhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('angkatan');
            $table->string('niu')->index();
            $table->string('fakultas');
            $table->string('nif');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
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
        Schema::drop('list_mhs');
    }
}
