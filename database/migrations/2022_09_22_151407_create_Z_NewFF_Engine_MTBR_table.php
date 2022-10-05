<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNewFFEngineMTBRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_NewFF_Engine_MTBR', function (Blueprint $table) {
            $table->increments('ID_Z_NewFF_Engine_MTBR');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('EngineVariant', 250)->nullable();
            $table->string('Operator', 250)->nullable();
            $table->float('Thrust', 0, 0)->nullable();
            $table->string('area', 250)->nullable();
            $table->string('Output_EngineVariant', 250)->nullable();
            $table->float('Global_MTBR_AVG', 0, 0)->nullable();
            $table->float('Generic_Operator', 0, 0)->nullable();
            $table->float('Generic_Country', 0, 0)->nullable();
            $table->float('Generic_Region', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_NewFF_Engine_MTBR');
    }
}
