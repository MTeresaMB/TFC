<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuscriptHasPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscript_has_place', function (Blueprint $table) {
            $table->unsignedInteger('id_manuscript');
            $table->unsignedInteger('id_place');
            $table->timestamps();

        });

        Schema::table('manuscript_has_place', function ($table){
            $table->foreign('id_manuscript')->references('id_manuscript')->on('manuscript')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_place')->references('id_place')->on('place')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuscript_has_place');
    }
}
