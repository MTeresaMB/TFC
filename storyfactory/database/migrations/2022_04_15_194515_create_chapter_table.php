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
            $table->increments('id_chapter');
            $table->string('title', 100);
            $table->text('summary', 10000)->nullable();
            $table->unsignedInteger('id_manuscript');
            $table->timestamps();
        });

        Schema::table('chapter', function($table){
            $table->foreign('id_manuscript')->references('id_manuscript')->on('manuscript')->onDelete('cascade')->onUpdate('cascade');
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
