<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesans', function (Blueprint $table) {
            $table->id();
            $table->string('cekin');
            $table->string('cekout');
            $table->string('jml_kamar');
            $table->string('nama_pemesan');
            $table->string('email_pemesan');
            $table->string('phone');
            $table->string('tipe_kamar');
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
        Schema::dropIfExists('pemesans');
    }
}
