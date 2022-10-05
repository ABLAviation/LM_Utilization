<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAircraftWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Aircraft_weights', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Aircraft_weights');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('Max_Taxi_Weight_Kgs')->nullable();
            $table->string('Max_TakeOff_Weight_Kgs')->nullable();
            $table->string('Max_Landing_Weight_Kgs')->nullable();
            $table->string('Max_ZeroFuel_Weight_Kgs')->nullable();
            $table->string('Manufactures_Empty_Weight_Kgs')->nullable();
            $table->string('Operating_Empty_Weight_Kgs')->nullable();
            $table->string('Basic_Empty_Weight_Kgs')->nullable();
            $table->string('Designed_MaxTakeOff_Weight_Kgs')->nullable();
            $table->string('Designed_MaxLanding_Weight_Kgs')->nullable();
            $table->string('Designed_MaxZeroFuel_Weight_Kgs')->nullable();
            $table->string('Maximum_Gross_Weight_Kgs')->nullable();
            $table->string('Max_Taxi_Weight_lbs')->nullable();
            $table->string('Max_TakeOff_Weight_lbs')->nullable();
            $table->string('Max_Landing_Weight_lbs')->nullable();
            $table->string('Max_ZeroFuel_Weight_lbs')->nullable();
            $table->string('Manufactures_Empty_Weight_lbs')->nullable();
            $table->string('Operating_Empty_Weight_lbs')->nullable();
            $table->string('Basic_Empty_Weight_lbs')->nullable();
            $table->string('Designed_MaxTakeOff_Weight_lbs')->nullable();
            $table->string('Designed_MaxLanding_Weight_lbs')->nullable();
            $table->string('Designed_MaxZeroFuel_Weight_lbs')->nullable();
            $table->string('Maximum_Gross_Weight_lbs')->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SpecSheet_Aircraft_weights');
    }
}
