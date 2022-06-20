<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place', function (Blueprint $table) {
            $table->increments('id_place');
             $table->unsignedInteger('id_user');
            $table->string('name');
            $table->text('description', 65000)->nullable();
            $table->text('history', 65000)->nullable();
            $table->timestamps();
        });

         Schema::table('place', function($table){
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
        Schema::dropIfExists('place');
    }
}
