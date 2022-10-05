<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNewFFAPUCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_NewFF_APU_Costs', function (Blueprint $table) {
            $table->increments('ID_Z_NewFF_APU_Costs');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('apumodel', 250)->nullable();
            $table->string('operator', 250)->nullable();
            $table->float('mtbr', 0, 0)->nullable();
            $table->date('esc_date')->nullable();
            $table->string('Output_apumodel', 250)->nullable();
            $table->date('Output_escdate')->nullable();
            $table->string('esc_rate', 250)->nullable();
            $table->decimal('APU_month_avg_global', 18, 5)->nullable();
            $table->decimal('APU_month_avg_operator', 18, 5)->nullable();
            $table->decimal('APU_month_avg_country', 18, 5)->nullable();
            $table->decimal('APU_month_avg_region', 18, 5)->nullable();
            $table->decimal('APU_fc_avg_global', 18, 5)->nullable();
            $table->decimal('APU_fc_avg_operator', 18, 5)->nullable();
            $table->decimal('APU_fc_avg_country', 18, 5)->nullable();
            $table->decimal('APU_fc_avg_region', 18, 5)->nullable();
            $table->decimal('APU_fh_avg_global', 18, 5)->nullable();
            $table->decimal('APU_fh_avg_operator', 18, 5)->nullable();
            $table->decimal('APU_fh_avg_country', 18, 5)->nullable();
            $table->decimal('APU_fh_avg_region', 18, 5)->nullable();
            $table->decimal('APU_total_avg_global', 18, 5)->nullable();
            $table->decimal('APU_total_avg_operator', 18, 5)->nullable();
            $table->decimal('APU_total_avg_country', 18, 5)->nullable();
            $table->decimal('APU_total_avg_region', 18, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_NewFF_APU_Costs');
    }
}
