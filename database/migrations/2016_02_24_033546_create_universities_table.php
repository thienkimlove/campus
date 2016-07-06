<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('desc');
            $table->string('slug', env('CLUB_SLUG_URL_LENGTH'))->unique();
            $table->integer('city_id')->unsigned();
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
        Schema::drop('universities');
    }

}
