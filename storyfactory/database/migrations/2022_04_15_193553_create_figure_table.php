<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFigureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figure', function (Blueprint $table) {
            $table->increments('id_figure');
            $table->unsignedInteger('id_user');
            $table->string('nameFigure', 100)->unique();
            $table->text('biography')->nullable();
            $table->string('role', 100)->nullable();
            $table->text('flaw', 6000)->nullable();
            $table->text('external_motivation', 6000)->nullable();
            $table->text('internal_motivation', 6000)->nullable();
            $table->text('positive_traits', 6000)->nullable();
            $table->text('negative_traits', 6000)->nullable();
            $table->text('quirks_mannerisms', 6000)->nullable();
            $table->text('motto', 6000)->nullable();
            $table->text('build', 6000)->nullable();
            $table->text('hair_color', 6000)->nullable();
            $table->text('hair_style', 6000)->nullable();
            $table->text('eye_color', 6000)->nullable();
            $table->text('scars', 6000)->nullable();
            $table->timestamps();
        });

          Schema::table('figure', function($table){
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
        Schema::dropIfExists('figure');
    }
}
