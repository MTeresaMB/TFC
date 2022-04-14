<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterHasCharacter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_has_character', function (Blueprint $table) {
            $table->unsignedInteger('idCharacter');
            $table->unsignedInteger('idChapter');
        });

        Shema::table('chapter_has_character', function($table){
            $table->foreign('idCharacter')->references('idCharacter')->on('character')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idChapter')->references('idChapter')->on('chapter')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_has_character');
    }
}
