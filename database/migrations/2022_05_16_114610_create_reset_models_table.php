<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResetModelsTable extends Migration
{

    public function up()
    {
        Schema::create('reset_models', function (Blueprint $table) {
            $table->id();
            $table->string('final_price');
            $table->string('table_number');
            $table->integer('weater_id')->unsigned()->index();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('reset_models');
    }
}