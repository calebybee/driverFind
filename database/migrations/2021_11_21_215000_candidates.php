<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Candidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('phone');
            $table->string('email', 100);
            $table->string('city');
            $table->string('state');
            $table->integer('salary');
            $table->string('startdate');
            $table->string('resume_path');
            $table->timestamps();
            $table->longText('aboutme');
            $table->string('slug');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
