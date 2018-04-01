<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('movie_title');
            $table->text('movie_description');
            $table->integer('movie_rating');
            $table->string('movie_category');
            $table->string('movie_watch_time');
            $table->string('movie_director_name');
            $table->string('movie_stars_name');
            $table->string('movie_trailer_url')->nullable($value = true);
            $table->string('movie_poster')->default('movies_images/default.jpg');
            $table->float('movie_ticket_price');
            $table->date('movie_released_date');
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
