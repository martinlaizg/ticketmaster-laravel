<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('event_id')->unsigned();
            $table->integer('ubication_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('shows', function($table) {
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('ubication_id')->references('id')->on('ubications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shows');
    }
}
