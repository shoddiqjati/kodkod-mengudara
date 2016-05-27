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
            $table->string('nama')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('niu')->index();
            $table->string('fakultas')->nullable();
            $table->string('nif')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('prodi')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
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
