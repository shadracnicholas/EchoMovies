<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id');
            $table->integer('schedule_id');
            $table->integer('ticket_quantity');
            $table->string('ticket_plan');
            $table->string('ticket_booked_person');
            $table->string('ticket_booked_person_phone');
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
        Schema::dropIfExists('book_tickets');
    }
}
