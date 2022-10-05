<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZFFEngineMTBRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_FF_Engine_MTBR', function (Blueprint $table) {
            $table->increments('ID_Z_FF_Engine_MTBR');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('Param1', 250)->nullable();
            $table->string('Param2', 250)->nullable();
            $table->string('Param3', 250)->nullable();
            $table->string('Output_var1', 250)->nullable();
            $table->float('Output_num1', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_FF_Engine_MTBR');
    }
}
