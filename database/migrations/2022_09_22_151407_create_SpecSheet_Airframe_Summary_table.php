<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAirframeSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Airframe_Summary', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Airframe_Summary');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->integer('Currentoperator_ID')->nullable();
            $table->integer('Last_Operator_ID')->nullable();
            $table->string('Owner_Aircraft', 250)->nullable();
            $table->date('Lastoperating_Startdate')->nullable();
            $table->date('Lastoperating_Enddate')->nullable();
            $table->string('RegistrationNumber', 250)->nullable();
            $table->integer('RegistrationCountry')->nullable();
            $table->date('RegistrationDate')->nullable();
            $table->date('DeregistrationDate')->nullable();
            $table->string('Old_RegistrationNumber', 250)->nullable();
            $table->integer('Old_Registration_country')->nullable();
            $table->date('Old_RegistrationDate')->nullable();
            $table->date('Old_DeregistrationDate')->nullable();
            $table->string('Line_Number', 250)->nullable();
            $table->string('Variable_Number_Weight_variant', 250)->nullable();
            $table->string('Basic_Number', 250)->nullable();
            $table->string('IPC_Code', 250)->nullable();
            $table->string('Lease_type', 250)->nullable();
            $table->date('Lease_Start')->nullable();
            $table->date('Lease_End')->nullable();
            $table->string('Aircraft_Age')->nullable();
            $table->date('DOM')->nullable();
            $table->date('Date_of_specsheet')->nullable();
            $table->date('Date_of_Data')->nullable();
            $table->decimal('TSN', 18, 5)->nullable();
            $table->decimal('CSN', 18, 5)->nullable();
            $table->float('FH_FC_Ratio', 0, 0)->nullable();
            $table->string('FH_Since_StartLease')->nullable();
            $table->string('FC_Since_StartLease')->nullable();
            $table->string('Planned_Utilization_Hours')->nullable();
            $table->string('Planned_Utilization_Cycles')->nullable();
            $table->string('Hours_Flown_Month')->nullable();
            $table->string('Cycles_Flown_Month')->nullable();
            $table->string('Daily_Hours')->nullable();
            $table->string('Daily_Cycles')->nullable();
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
        Schema::dropIfExists('SpecSheet_Airframe_Summary');
    }
}
