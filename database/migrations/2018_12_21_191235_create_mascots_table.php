<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotsTable extends Migration
{
    public function up()
    {
        Schema::create('mascots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('weight');
            $table->enum('weight_type',['Gramos','Kilogramos','Toneladas']);
            $table->integer('age');
            $table->enum('age_type',['Dias','Semanas','Meses','Años']);


            $table->integer('animal_id')->unsigned();
            $table->integer('race_id')->unsigned()->nullable();
            $table->integer('person_id')->unsigned();

            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascots');
    }
}
