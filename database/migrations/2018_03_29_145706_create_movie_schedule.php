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
            $table->string('schdule_day');
            $table->string('schdule_day_time_1')->nullable($value = true)->default('---');
            $table->string('schdule_day_time_2')->nullable($value = true)->default('---');
            $table->string('schdule_day_time_3')->nullable($value = true)->default('---');
            $table->string('schdule_day_time_4')->nullable($value = true)->default('---');
            $table->string('schdule_day_time_5')->nullable($value = true)->default('---');

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
