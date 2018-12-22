<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotSymptomTable extends Migration
{
    public function up()
    {
        Schema::create('mascot_symptom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mascot_id')->unsigned();
            $table->integer('symptom_id')->unsigned();

            $table->foreign('mascot_id')->references('id')->on('mascots')->onDelete('cascade');
            $table->foreign('symptom_id')->references('id')->on('symptoms')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascot_symptom');
    }
}
