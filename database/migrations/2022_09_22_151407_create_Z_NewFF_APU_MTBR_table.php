<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNewFFAPUMTBRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_NewFF_APU_MTBR', function (Blueprint $table) {
            $table->increments('ID_Z_NewFF_APU_MTBR');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('apumodel', 250)->nullable();
            $table->string('ac_type', 250)->nullable();
            $table->string('Output_apumodel', 250)->nullable();
            $table->float('interval_month', 0, 0)->nullable();
            $table->float('interval_apuh', 0, 0)->nullable();
            $table->float('interval_apucy', 0, 0)->nullable();
            $table->float('grounding_time', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_NewFF_APU_MTBR');
    }
}
