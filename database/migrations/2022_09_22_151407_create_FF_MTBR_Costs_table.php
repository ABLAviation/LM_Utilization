<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFFMTBRCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FF_MTBR_Costs', function (Blueprint $table) {
            $table->increments('ID_Z_FF_MTBR_Costs');
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
            $table->string('Output_var2', 250)->nullable();
            $table->decimal('Output_num1', 18, 5)->nullable();
            $table->decimal('Output_num2', 18, 5)->nullable();
            $table->decimal('Output_num3', 18, 5)->nullable();
            $table->decimal('Output_num4', 18, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FF_MTBR_Costs');
    }
}
