<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//         Title 
// Description 
// Number passenger
// Number bags
// Hourly rate
// Distance rate 
// per day rate
// distance kilometer rate 

        Schema::create('fleets', function (Blueprint $table) {
            $table->id();
            $table->string('numberplat');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->integer('Numberofpassenger');
            $table->integer('Numberofbags');
            $table->float('hourlyrate');
            $table->float('distancerate');
            $table->float('perdayrate');
            $table->float('distancekilometerrate');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fleet');
    }
};
