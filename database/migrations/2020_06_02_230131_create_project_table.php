<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('projectCode', 8);
            $table->string('description', 30)->nullable();
            $table->date('validFrom')->nullable();
            $table->string('cCode', 4)->nullable();
            $table->string('phase', 30)->nullable();
            $table->primary('projectCode');
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
        Schema::dropIfExists('project');
    }
}
