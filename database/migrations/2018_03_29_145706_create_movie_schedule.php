<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id');
            $table->string('schedule_day');
            $table->date('schedule_date');
            $table->integer('movie_ticket_price');
            $table->integer('movie_seats')->nullable($value = true)->default('50');
            $table->string('schedule_day_time_1')->nullable($value = true)->default('---');
            $table->string('schedule_day_time_2')->nullable($value = true)->default('---');
            $table->string('schedule_day_time_3')->nullable($value = true)->default('---');
            $table->string('schedule_day_time_4')->nullable($value = true)->default('---');
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
        Schema::dropIfExists('movies');
    }
}
