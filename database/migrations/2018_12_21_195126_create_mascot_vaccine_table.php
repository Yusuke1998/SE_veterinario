<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotVaccineTable extends Migration
{
    public function up()
    {
        Schema::create('mascot_vaccine', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mascot_id')->unsigned();
            $table->integer('vaccine_id')->unsigned();

            $table->foreign('mascot_id')->references('id')->on('mascots')->onDelete('cascade');
            $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascot_vaccine');
    }
}
