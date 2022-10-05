<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMUTILIZATIONTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_UTILIZATION', function (Blueprint $table) {
            $table->increments('ID_LM_UTILIZATION');
            $table->integer('ID_ABLDEALS');
            $table->date('MONTHLY_UTILIZATION_STARTDATE')->nullable();
            $table->date('MONTHLY_UTILIZATION_ENDDATE')->nullable();
            $table->date('LAST_UTILIZATION_DATE')->nullable();
            $table->decimal('MONTHLYAIRFRAME_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MONTHLYAIRFRAME_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE1_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE1_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE2_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE2_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE3_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE3_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE4_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MONTHLYENGINE4_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('APU_UTILIZATION__APUH', 18, 5)->nullable();
            $table->decimal('APU_UTILIZATION__APUC', 18, 5)->nullable();
            $table->decimal('NOSELDG_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('NOSELDG_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH1_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH1_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH1_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH1_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH2_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH2_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH2_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH2_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH3_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH3_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH3_UTILIZATION_FH', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH3_UTILIZATION_FC', 18, 5)->nullable();
            $table->decimal('AIRCRAFT_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('AIRCRAFT_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE1_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE2_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE3_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE4_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE1_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE2_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE3_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('ENGINE4_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('APU_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('APU_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('NOSELDG_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('NOSELDG_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH1_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH1_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH2_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH2_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH3_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH3_TSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH1_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH1_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH2_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH2_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_LH3_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->decimal('MAINLDG_RH3_CSN_LATESTUTILIZATIONDATE', 18, 5)->nullable();
            $table->integer('ID_CURRENCY');
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
        Schema::dropIfExists('LM_UTILIZATION');
    }
}
