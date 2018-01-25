<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('location');
			$table->integer('seatable');
			$table->integer('seats');
			$table->integer('rows');
			$table->integer('cols');
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
        Schema::drop('ubications');
    }
}
