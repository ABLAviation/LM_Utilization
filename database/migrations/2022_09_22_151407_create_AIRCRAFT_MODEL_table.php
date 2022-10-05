<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAIRCRAFTMODELTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AIRCRAFT_MODEL', function (Blueprint $table) {
            $table->increments('ID_AIRCRAFT');
            $table->integer('Aircraft_Category_ID');
            $table->string('AIRCRAFT_Type', 50)->nullable();
            $table->string('AIRCRAFT_Family', 50)->nullable();
            $table->string('AIRCRAFT_Manufacturer', 50)->nullable();
            $table->string('WEBSITE', 50)->nullable();
            $table->string('COMMERCIAL_NAME', 50)->nullable();
            $table->integer('Country_ID')->nullable();
            $table->integer('Region_ID')->nullable();
            $table->string('CreatedBy', 20)->nullable();
            $table->dateTime('CreationDate')->nullable();
            $table->string('ModifiedBy', 20)->nullable();
            $table->dateTime('ModificationDate')->nullable();
            $table->string('EIS', 50)->nullable();
            $table->string('Enhancement', 50)->nullable();
            $table->float('Weight_value', 0, 0)->nullable();
            $table->string('Weight_Unit', 50)->nullable();
            $table->float('Airframe_Handling', 0, 0)->nullable();
            $table->float('Weight_Opt2', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AIRCRAFT_MODEL');
    }
}
