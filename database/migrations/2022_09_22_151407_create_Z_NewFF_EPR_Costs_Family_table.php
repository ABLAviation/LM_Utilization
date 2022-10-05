<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNewFFEPRCostsFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_NewFF_EPR_Costs_Family', function (Blueprint $table) {
            $table->increments('ID_Z_NewFF_EPR_Costs_Family');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('EngineVariant', 250)->nullable();
            $table->string('Operator', 250)->nullable();
            $table->float('Thrust', 0, 0)->nullable();
            $table->date('Esc_date')->nullable();
            $table->string('Output_Engine', 250)->nullable();
            $table->date('Output_escdate')->nullable();
            $table->string('esc_rate', 250)->nullable();
            $table->decimal('Global_avg_1strun', 18, 5)->nullable();
            $table->decimal('1strun_operator', 18, 5)->nullable();
            $table->decimal('1strun_country', 18, 5)->nullable();
            $table->decimal('1strun_region', 18, 5)->nullable();
            $table->decimal('Global_avg_matrun', 18, 5)->nullable();
            $table->decimal('matrun_operator', 18, 5)->nullable();
            $table->decimal('matrun_country', 18, 5)->nullable();
            $table->decimal('matrun_region', 18, 5)->nullable();
            $table->string('flag_default', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_NewFF_EPR_Costs_Family');
    }
}
