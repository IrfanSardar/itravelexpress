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

//     Pick up address
// Drop of address
// Pick of date 
// Pick of time
// Return 
// One way
// Fleet vhicle 
// Add vhecle 
// Flat fit
// Price from abu dabi 

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Pick up address');
            $table->string('drop of address');
            $table->date('Pick of date');
            $table->string('type');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
