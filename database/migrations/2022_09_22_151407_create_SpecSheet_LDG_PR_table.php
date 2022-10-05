<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetLDGPRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_LDG_PR', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_LDG_PR');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->string('LDG_Manufacturer', 250)->nullable();
            $table->integer('LDG_Position')->nullable();
            $table->string('LDG_PartNumber', 250)->nullable();
            $table->string('LDG_SN', 250)->nullable();
            $table->date('Status_As_Of')->nullable();
            $table->date('Date_Overhauled')->nullable();
            $table->string('Overhaul_Interval_Months')->nullable();
            $table->string('Overhaul_Interval_FC')->nullable();
            $table->string('Overhaul_Interval_Years')->nullable();
            $table->string('TotalFH_at_ShopVisit')->nullable();
            $table->string('TotalFC_at_ShopVisit')->nullable();
            $table->string('Time_Since_Overhaul')->nullable();
            $table->string('Cycles_Since_Overhaul')->nullable();
            $table->integer('Days_Since_Overhaul')->nullable();
            $table->string('Cycles_remaining')->nullable();
            $table->string('Months_Remaining')->nullable();
            $table->date('Next_OH_DueDate')->nullable();
            $table->string('Next_Due_Cycles')->nullable();
            $table->string('Location_of_LastSV', 250)->nullable();
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
        Schema::dropIfExists('SpecSheet_LDG_PR');
    }
}
