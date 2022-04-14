<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->increments('idChapter');
            $table->string('titleChapter', 100);
            $table->string('summary', 300);
            $table->unsignedInteger('idMan');
            $table->timestamps();
        });

        Schema::table('chapter', function ($table) {
            $table->foreign('idMan')->references('idMan')->on('manuscript')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter');
    }
}
