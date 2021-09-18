<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->char('pasword');
            $table->char('nama_pendaftar');
            $table->char('tempat_lahir');
            $table->char('tanggal_lahir');
            $table->text('alamat_pendaftar',1000);
            $table->char('jenis_kelamin');
            $table->char('hp_pendaftar',20);
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
        Schema::dropIfExists('pendaftars');
    }
}

 