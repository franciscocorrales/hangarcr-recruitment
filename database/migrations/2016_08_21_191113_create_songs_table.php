<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function (Blueprint $table) {
			$table->increments('id');
			$table->string('url');
			$table->string('songname');
			$table->string('artistid');
			$table->string('artistname');
			$table->string('albumid');
			$table->string('albumname');
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
        Schema::table('songs', function (Blueprint $table) {
            Schema::drop('songs');
        });
    }
}
