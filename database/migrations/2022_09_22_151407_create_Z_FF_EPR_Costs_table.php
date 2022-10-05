<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZFFEPRCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_FF_EPR_Costs', function (Blueprint $table) {
            $table->increments('ID_Z_FF_EPR_Costs');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('Param1', 250)->nullable();
            $table->string('Param2', 250)->nullable();
            $table->float('Param3', 0, 0)->nullable();
            $table->date('Param4')->nullable();
            $table->string('Output_var1', 250)->nullable();
            $table->date('Output_date1')->nullable();
            $table->string('Output_var2', 250)->nullable();
            $table->decimal('Output_num1', 18, 5)->nullable();
            $table->decimal('Output_num2', 18, 5)->nullable();
            $table->decimal('Output_num3', 18, 5)->nullable();
            $table->decimal('Output_num4', 18, 5)->nullable();
            $table->decimal('Output_num5', 18, 5)->nullable();
            $table->decimal('Output_num6', 18, 5)->nullable();
            $table->decimal('Output_num7', 18, 5)->nullable();
            $table->decimal('Output_num8', 18, 5)->nullable();
            $table->decimal('Output_num9', 18, 5)->nullable();
            $table->decimal('Output_num10', 18, 5)->nullable();
            $table->decimal('Output_num11', 18, 5)->nullable();
            $table->decimal('Output_num12', 18, 5)->nullable();
            $table->decimal('Output_num13', 18, 5)->nullable();
            $table->decimal('Output_num14', 18, 5)->nullable();
            $table->decimal('Output_num15', 18, 5)->nullable();
            $table->decimal('Output_num16', 18, 5)->nullable();
            $table->decimal('Output_num17', 18, 5)->nullable();
            $table->decimal('Output_num18', 18, 5)->nullable();
            $table->decimal('Output_num19', 18, 5)->nullable();
            $table->decimal('Output_num20', 18, 5)->nullable();
            $table->decimal('Output_num21', 18, 5)->nullable();
            $table->decimal('Output_num22', 18, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_FF_EPR_Costs');
    }
}
