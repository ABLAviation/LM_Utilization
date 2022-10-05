<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAirframeChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Airframe_Checks', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Airframe_Checks');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID');
            $table->string('ACType', 250)->nullable();
            $table->date('Status_As_Of')->nullable();
            $table->string('Name_event', 250)->nullable();
            $table->integer('MAINTEANCEPLAN_ID')->nullable();
            $table->string('Phase', 250)->nullable();
            $table->string('Interval_FH')->nullable();
            $table->string('Interval_FC')->nullable();
            $table->string('Interval_Years')->nullable();
            $table->string('Interval_Months')->nullable();
            $table->string('Interval_Days')->nullable();
            $table->date('LastDone_Date')->nullable();
            $table->string('LastDone_Status', 250)->nullable();
            $table->string('Last_Done_FH')->nullable();
            $table->string('Last_Done_FC')->nullable();
            $table->string('Days_sincelast')->nullable();
            $table->string('Time_sincelast')->nullable();
            $table->string('Cycles_since_last')->nullable();
            $table->string('TotalTime_SinceNew')->nullable();
            $table->string('TotalCycle_SinceNew')->nullable();
            $table->string('NextDue_FH')->nullable();
            $table->string('NextDue_FC')->nullable();
            $table->date('NextDue_Date')->nullable();
            $table->string('Remaining_FH')->nullable();
            $table->string('Remaining_FC')->nullable();
            $table->string('Remaining_Months')->nullable();
            $table->string('Remaining_days')->nullable();
            $table->string('MRO', 250)->nullable();
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
        Schema::dropIfExists('SpecSheet_Airframe_Checks');
    }
}
