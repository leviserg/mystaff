<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlace3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place3s', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name',50);
            $table->integer('place');
            $table->unsignedInteger('chief')->foreign()->references('id')->on('place2s')->onDelete('cascade');
            $table->integer('salary');
            $table->string('avatar',100);
            $table->timestamps();
        });
        /*
        Schema::enableForeignKeyConstraints();
        Schema::table('place3s', function($table) {
            $table->foreign('chief')->references('id')->on('place2s')->onDelete('cascade');
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
        Schema::dropIfExists('place3s');
    }
}
