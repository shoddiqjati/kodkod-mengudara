<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecordMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tanggal_surat')->nullable();
            $table->string('no_surat');
            $table->integer('mhs_id')->unsigned()->default(0);
            $table->foreign('mhs_id')
                    ->references('id')->on('list_mhs')
                    ->onDelete('cascade');
            $table->string('nama_mhs')->nullable();
            $table->string('nama_surat');
            $table->foreign('nama_surat')
                    ->references('nama_surat')->on('template_surat')
                    ->onDelete('cascade');
            $table->string('keterangan')->nullable();
            $table->string('status')->nullable();
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
        Schema::drop('record_mhs');
    }
}
