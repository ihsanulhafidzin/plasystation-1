<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaystationsTable extends Migration
{
    public function up()
    {
        Schema::create('playstations', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('foto');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('playstations');
    }
}
