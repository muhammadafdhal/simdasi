<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomisilisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domisilis', function (Blueprint $table) {
            $table->id('domisili_id');
            $table->integer('domisili_kec_id');
            $table->string('domisili_nama');
            $table->enum('domisili_jk', ['Laki-Laki','Perempuan']);
            $table->string('domisili_tmp_lahir');
            $table->date('domisili_tgl_lahir');
            $table->string('domisili_no_nik');
            $table->enum('domisili_agama', ['Islam','Hindu','Buddha','Kristen','Khonghucu','Katolik']);
            $table->string('domisili_pekerjaan');
            $table->string('domisili_alamat');
            $table->string('domisili_keperluan');
            $table->string('domisili_lampiran_daerah_asal');
            $table->string('domisili_lampiran_daerah_pindah');
            $table->string('domisili_lampiran_kk');
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
        Schema::dropIfExists('domisilis');
    }
}
