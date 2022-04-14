<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuscriptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscript', function (Blueprint $table) {
            $table->increments('idMan');
            $table->string('title', 100);
            $table->string('summary', 300);
            $table->unsignedInteger('idUser');
            $table->timestamps();
        });

        Schema::table('manuscript', function ($table) {
            $table->foreign('idUser')->references('idUser')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuscript');
    }
}
