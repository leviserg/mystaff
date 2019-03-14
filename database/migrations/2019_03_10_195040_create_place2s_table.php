<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlace2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->integer('place');
            $table->unsignedInteger('chief')->foreign()->references('id')->on('place1s')->onDelete('cascade');
            $table->integer('salary');
            $table->string('avatar',100);
            $table->timestamps();
        });
        /*
       Schema::enableForeignKeyConstraints();
        Schema::table('place2s', function($table) {
            $table->foreign('chief')->references('id')->on('place1s')->onDelete('cascade');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place2s');
    }
}
