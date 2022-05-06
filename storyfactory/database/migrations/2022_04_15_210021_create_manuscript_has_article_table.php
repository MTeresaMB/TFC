<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuscriptHasArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscript_has_article', function (Blueprint $table) {
            $table->unsignedInteger('id_manuscript');
            $table->unsignedInteger('id_article');
            $table->timestamps();
        });

        Schema::table('manuscript_has_article', function($table){
            $table->foreign('id_manuscript')->references('id_manuscript')->on('manuscript')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_article')->references('id_article')->on('article')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuscript_has_article');
    }
}
