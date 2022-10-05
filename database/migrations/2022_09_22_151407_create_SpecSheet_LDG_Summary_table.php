<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetLDGSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_LDG_Summary', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_LDG_Summary');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('LDG_SN', 250)->nullable();
            $table->string('LDG_Manufacturer', 250)->nullable();
            $table->string('LDG_PartNumber', 250)->nullable();
            $table->string('TotalTime_Since_New')->nullable();
            $table->string('TotalCycles_Since_New')->nullable();
            $table->float('LDG_Ratio', 0, 0)->nullable();
            $table->date('Status_As_Of')->nullable();
            $table->date('Date_Overhauled')->nullable();
            $table->string('Overhaul_Interval_Years')->nullable();
            $table->string('Overhaul_Interval_Months')->nullable();
            $table->string('Overhaul_Interval_FC')->nullable();
            $table->date('LDG_Date_Installed')->nullable();
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
        Schema::dropIfExists('SpecSheet_LDG_Summary');
    }
}
