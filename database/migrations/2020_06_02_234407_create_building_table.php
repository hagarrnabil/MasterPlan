<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building', function (Blueprint $table) {
            $table->string('buildingCode', 8);
            $table->string('description', 60)->nullable();
            $table->decimal('type' , 8, 2 )->nullable();
            $table->decimal('zone' , 8, 2)->nullable();
            $table->string('cCode', 4)->nullable();


            $table->string('projectCode', 8);
            $table->foreign('projectCode')->references('projectCode')->on('project');
            $table->primary('buildingCode');
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
        Schema::dropIfExists('building');
    }
}
