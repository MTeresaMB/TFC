<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterHasFigureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_has_figure', function (Blueprint $table) {
            $table->unsignedInteger('id_chapter');
            $table->unsignedInteger('id_figure');
            $table->timestamps();
        });

        Schema::table('chapter_has_figure', function($table){
            $table->foreign('id_chapter')->references('id_chapter')->on('chapter')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_figure')->references('id_figure')->on('figure')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_has_figure');
    }
}
