<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('desc');
            $table->string('slug', env('CLUB_SLUG_URL_LENGTH'))->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('university_id')->unsigned();
            $table->boolean('status')->default(false);
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
        Schema::drop('clubs');
    }

}
