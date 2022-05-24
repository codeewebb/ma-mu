<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys_models', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id')->unsigned()->index();
            $table->string('component');
            $table->string('unit');
            $table->integer('amount');
            $table->float('unit_price');
            $table->float('final_price');
            $table->string('description');
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
        Schema::dropIfExists('buys_models');
    }
}