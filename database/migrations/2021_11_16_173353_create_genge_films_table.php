<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGengeFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genge_films', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('genre_id')->unsigned();
            $table->bigInteger('film_id')->unsigned();

            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');;
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');;

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
        Schema::dropIfExists('genge_films');
    }
}
