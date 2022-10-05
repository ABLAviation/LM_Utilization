<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAPUPRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_APU_PR', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_APU_PR');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->string('APU_Manufacturer', 250)->nullable();
            $table->string('APU_PartNumber', 250)->nullable();
            $table->string('APU_Model', 250)->nullable();
            $table->string('APU_SN', 250)->nullable();
            $table->string('Interval')->nullable();
            $table->date('Date_of_Manufacture')->nullable();
            $table->string('Location_MSN', 250)->nullable();
            $table->string('Location_Registration', 250)->nullable();
            $table->string('TSN')->nullable();
            $table->string('CSN')->nullable();
            $table->float('APU_Ratio', 0, 0)->nullable();
            $table->date('Status_As_Of')->nullable();
            $table->date('Date_of_LSV')->nullable();
            $table->string('Reason', 2500)->nullable();
            $table->string('Facility', 250)->nullable();
            $table->string('TotalAPU_Hours_at_SV')->nullable();
            $table->string('TotalAPU_Cycles_at_SV')->nullable();
            $table->integer('Days_sinceSV')->nullable();
            $table->string('Time_SinceSV')->nullable();
            $table->string('Cycles_Since_SV')->nullable();
            $table->string('TotalAPU_FH_at_ShopVisit')->nullable();
            $table->string('Hours_remaining')->nullable();
            $table->string('Cycles_remaining')->nullable();
            $table->date('Forecast_Date')->nullable();
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
        Schema::dropIfExists('SpecSheet_APU_PR');
    }
}
