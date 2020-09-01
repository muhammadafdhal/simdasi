<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahirans', function (Blueprint $table) {
            $table->id('kelahiran_id');
            $table->string('kelahiran_nama');
            $table->string('kelahiran_nama_ayah');
            $table->string('kelahiran_nama_ibu');
            $table->string('kelahiran_lampiran_ktp_ayah');
            $table->string('kelahiran_lampiran_ktp_ibu');
            $table->string('kelahiran_surat_nikah');
            $table->string('kelahiran_lampiran_akte_kelahiran');
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
        Schema::dropIfExists('kelahirans');
    }
}
