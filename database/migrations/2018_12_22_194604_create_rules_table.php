<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration
{
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('treatment');
            $table->integer('age_1');
            $table->enum('age_type_1',['Dias','Semanas','Meses','Años']);
            $table->integer('age_2')->nullable();
            $table->enum('age_type_2',['Dias','Semanas','Meses','Años'])->nullable();
            $table->float('weight_1');
            $table->enum('weight_type_1',['Gramos','Kilogramos','Toneladas']);
            $table->float('weight_2')->nullable();
            $table->enum('weight_type_2',['Gramos','Kilogramos','Toneladas'])->nullable();

            $table->integer('doctor_id')->unsigned()->nullable();
            $table->integer('animal_id')->unsigned();
            $table->integer('race_id')->unsigned()->nullable();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
