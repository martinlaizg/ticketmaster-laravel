<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->float('price');
            $table->integer('show_id')->unsigned();
            $table->integer('col');
            $table->integer('row');
            $table->integer('seat_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('tickets', function($table) {
            $table->foreign('show_id')->references('id')->on('shows');
            $table->foreign('seat_id')->references('id')->on('seats');
            $table->foreign('payment_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
