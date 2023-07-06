<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->string('unitNumber', 8);
            $table->string('description', 60)->nullable();
            $table->string('status', 5)->nullable();
            $table->decimal('floor', 8 , 2)->nullable();
            $table->decimal('priceAmount', 8 , 2)->nullable();
            $table->string('priceCurr', 3)->nullable();
            $table->decimal('size', 8 , 2)->nullable();
            $table->string('unitOfMeasurment', 3)->nullable();
            $table->binary('layoutImg')->nullable();

            $table->string('buildingCode', 8)->nullable();
            $table->foreign('buildingCode')->references('buildingCode')->on('building');
            $table->string('projectCode', 8)->nullable();
            $table->foreign('projectCode')->references('projectCode')->on('project');
            $table->primary('unitNumber');
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
        Schema::dropIfExists('unit');
    }
}
