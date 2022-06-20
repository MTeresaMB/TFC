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
            $table->increments('id_manuscript');
            $table->string('title');
            $table->text('summary');
            $table->unsignedInteger('id_user');
            $table->timestamps();
        });

        Schema::table('manuscript', function($table){
            $table->foreign('id_user')->references('id_user')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
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


