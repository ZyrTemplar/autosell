<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->double('objem')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('fuel');
            $table->string('transmission');
            $table->string('drive_unit');
            $table->string('modification')->nullable();
            $table->integer('mileage');
            $table->integer('year');
            $table->bigInteger('price');
            $table->string('engine_form')->nullable();
            $table->double('speeding')->nullable();
            $table->integer('max_speed')->nullable();
            $table->integer('doors')->nullable();
            $table->integer('places')->nullable();
            $table->string('auto_body')->nullable();
            $table->string('color')->nullable();
            $table->string('town');
            $table->string('oblast')->nullable();
            $table->string('description');
            $table->string('seller_id');
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('photo7')->nullable();
            $table->string('photo8')->nullable();
            $table->string('photo9')->nullable();
            $table->string('photo10')->nullable();
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
        Schema::dropIfExists('autos');
    }
}
