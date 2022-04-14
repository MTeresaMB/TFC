<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->increments('idNote');
            $table->string('title', 50);
            $table->string('content', 500);
            $table->unsignedInteger('idMan');
            $table->timestamps();
        });

        Schema::table('note', function ($table) {
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
        Schema::dropIfExists('note');
    }
}
