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
//         session id 
// booking id 
// from 
// to
// retun type 
// date pick up
// return date 
// pick up time 
// return time
// number passenger
// number bags

        Schema::create('orderforms', function (Blueprint $table) {
            $table->id();
            $table->integer('driverid');
            $table->integer('vheclenumberplate');
            $table->integer('sessionid');
            $table->integer('bookingid');
            $table->string('from');
            $table->string('to');
            $table->string('paginationtitle');
            $table->string('returnfrom');
            $table->string('returnto');
            $table->string('flightnumber');
            $table->string('returntype');
            $table->date('pickupdate');
            $table->date('returndate');
            $table->time('pickuptime');
            $table->time('returntime');
            $table->integer('numberofadult');
            $table->integer('numberofbabies');
            $table->integer('numberofbag');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderform');
    }
};
