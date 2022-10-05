<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZFFQueriesTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_FFQueriesTracking', function (Blueprint $table) {
            $table->increments('ID_Z_FFQueriesTracking');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('Param1', 250)->nullable();
            $table->string('Param2', 250)->nullable();
            $table->string('Param3', 250)->nullable();
            $table->string('Param4', 250)->nullable();
            $table->string('Param5', 250)->nullable();
            $table->string('Param6', 250)->nullable();
            $table->string('Param7', 250)->nullable();
            $table->decimal('Output_num1', 18, 5)->nullable();
            $table->decimal('Output_num2', 18, 5)->nullable();
            $table->decimal('Output_num3', 18, 5)->nullable();
            $table->decimal('Output_num4', 18, 5)->nullable();
            $table->decimal('Output_num5', 18, 5)->nullable();
            $table->string('Output_var1', 250)->nullable();
            $table->string('Output_var2', 250)->nullable();
            $table->string('Output_var3', 250)->nullable();
            $table->string('Output_var4', 250)->nullable();
            $table->string('Output_var5', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_FFQueriesTracking');
    }
}
