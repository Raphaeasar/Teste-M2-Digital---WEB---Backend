<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desconto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('campanhas_id')->unsigned();
            $table->foreign('campanhas_id')->references('id')->on('campanhas');
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
        Schema::dropIfExists('desconto');
    }
};
