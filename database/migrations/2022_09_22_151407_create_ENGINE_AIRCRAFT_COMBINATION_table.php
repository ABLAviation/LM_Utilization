<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINEAIRCRAFTCOMBINATIONTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_AIRCRAFT_COMBINATION', function (Blueprint $table) {
            $table->increments('ID_COMBIN');
            $table->integer('ID_AircraftVariant');
            $table->integer('ID_EngineModel');
            $table->decimal('Thrust_lbs', 18, 5)->nullable();
            $table->decimal('Thrust_daN', 18, 5)->nullable();
            $table->decimal('Thrust_KN', 18, 5)->nullable();
            $table->float('TakeOfThrust_lbs', 0, 0)->nullable();
            $table->float('TakeOfThrust_KN', 0, 0)->nullable();
            $table->float('Continu_Thrust_lbs', 0, 0)->nullable();
            $table->float('Continu_Thrust_KN', 0, 0)->nullable();
            $table->integer('ID_Propellers')->nullable();
            $table->float('ShaftPower', 0, 0)->nullable();
            $table->string('WV_NUMBER', 50)->nullable();
            $table->string('WV_MOD', 50)->nullable();
            $table->float('MTOW', 0, 0)->nullable();
            $table->string('MTOW_Unit', 250)->nullable();
            $table->float('MLW', 0, 0)->nullable();
            $table->string('MLW_Unit', 250)->nullable();
            $table->float('MZFW', 0, 0)->nullable();
            $table->string('MZFW_Unit', 250)->nullable();
            $table->float('OEW', 0, 0)->nullable();
            $table->string('OEW_Unit', 250)->nullable();
            $table->float('Fuel_Capacity', 0, 0)->nullable();
            $table->float('EGT_RedlineTemp', 0, 0)->nullable();
            $table->float('MAX_Playload', 0, 0)->nullable();
            $table->integer('Seats_3Class')->nullable();
            $table->float('High_density', 0, 0)->nullable();
            $table->float('Range_nm', 0, 0)->nullable();
            $table->float('Belly_freight', 0, 0)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->integer('Nb_engine')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ENGINE_AIRCRAFT_COMBINATION');
    }
}
