<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarthquakePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earthquake_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('name');
            $table->double('magnitude');
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
        Schema::dropIfExists('earthquake_points');
    }
}
