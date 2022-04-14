<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->increments('idCharacter');
            $table->string('name', 100);
            $table->string('biography', 500);
            $table->string('role', 100);
            $table->string('flaw', 300)->nullable();
            $table->string('external_motivation', 500)->nullable();
            $table->string('internal_motivation', 500)->nullable();
            $table->string('positive_traits', 500)->nullable();
            $table->string('negative_traits', 500)->nullable();
            $table->string('quirks_mannerisms', 500)->nullable();
            $table->string('fears_phobias', 500)->nullable();
            $table->string('motto', 100)->nullable();
            $table->string('birth', 100)->nullable();
            $table->string('building', 100)->nullable();
            $table->string('hair_color', 100)->nullable();
            $table->string('hair_style', 100)->nullable();
            $table->string('eye_color', 500)->nullable();
            $table->string('scar', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character');
    }
}
