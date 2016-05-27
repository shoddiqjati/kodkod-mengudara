<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecordPgw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_pgw', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pgw_id')->unsigned()->default(0);
            $table->foreign('pgw_id')
                    ->references('id')->on('list_pgw')
                    ->onDelete('cascade');
            $table->string('nama_surat');
            $table->foreign('nama_surat')
                    ->references('nama_surat')->on('template_surat')
                    ->onDelete('cascade');
            $table->string('keterangan');
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
        Schema::drop('record_pgw');
    }
}
