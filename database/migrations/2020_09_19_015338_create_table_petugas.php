<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NamaPetugas');
            $table->date('TglLahir');
            $table->string('Alamat');
            $table->string('Jabatan');
            $table->string('NoHp');
            $table->string('Username');
            $table->string('Password');
            $table->integer('idlevel')->unsigned();
            $table->string('Photo');
            $table->foreign('idlevel')->references('id')->on('levels');
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
        Schema::dropIfExists('petugas');
    }
}
