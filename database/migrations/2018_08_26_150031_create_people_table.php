<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('hash');
            $table->json('timeslots');
            $table->string('email');
            $table->string('name', 100);
            $table->longText('comments');
            $table->string('group', 100);
            $table->string('phone', 50);
            $table->timestamps();
            $table->boolean('firstnight');
            $table->boolean('secondnight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
