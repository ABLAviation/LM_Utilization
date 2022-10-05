<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAircraftOperationalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Aircraft_Operational', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Aircraft_Operational');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('Fuel_Cap_LWG')->nullable();
            $table->string('Fuel_Cap_RWG')->nullable();
            $table->string('Fuel_Cap_CTR')->nullable();
            $table->string('Total_Fuel_Cap')->nullable();
            $table->string('Max_Fuel_Capacity_Litres')->nullable();
            $table->string('Max_Fuel_Capacity_USG')->nullable();
            $table->string('Maximum_Operating_Altitude_MTR')->nullable();
            $table->string('Maximum_APU_Operating_Altitude_MTR')->nullable();
            $table->string('Maximum_Operating_Altitude_FT')->nullable();
            $table->string('Maximum_APU_Operating_Altitude_FT')->nullable();
            $table->date('Date_ofLast_WeighingReport')->nullable();
            $table->string('Weight_ReportedBy', 250)->nullable();
            $table->string('Engine_Thrust_RatingCurrent')->nullable();
            $table->string('Engine_Thrust_RatingRedelivery')->nullable();
            $table->string('FADEC', 250)->nullable();
            $table->string('QEC_Configuration', 250)->nullable();
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
        Schema::dropIfExists('SpecSheet_Aircraft_Operational');
    }
}
