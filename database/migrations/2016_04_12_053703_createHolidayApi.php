<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country', 2);
            $table->string('year', 4);
            $table->timestamps();

            /* Optional */
            /*$table->string('month', 2);
            $table->string('day', 2);
            $table->string('previous');
            $table->string('upcoming');
            $table->string('pretty');*/

            /* Additional */
            /*$table->string('status');
            $table->rememberToken();
            $table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
