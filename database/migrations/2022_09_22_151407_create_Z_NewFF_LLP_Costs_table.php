<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNewFFLLPCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_NewFF_LLP_Costs', function (Blueprint $table) {
            $table->increments('ID_Z_NewFF_LLP_Costs');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('EngineVariant', 250)->nullable();
            $table->string('Operator', 250)->nullable();
            $table->date('esc_date')->nullable();
            $table->string('Output_Engine', 250)->nullable();
            $table->date('Output_escdate')->nullable();
            $table->string('esc_rate', 250)->nullable();
            $table->decimal('Avg_global', 18, 5)->nullable();
            $table->decimal('Avg_Operator', 18, 5)->nullable();
            $table->decimal('Avg_Country', 18, 5)->nullable();
            $table->decimal('Avg_region', 18, 5)->nullable();
            $table->decimal('Avg_LCP', 18, 5)->nullable();
            $table->decimal('Avg_Total', 18, 5)->nullable();
            $table->decimal('Avg_Total_operator', 18, 5)->nullable();
            $table->decimal('Avg_Total_country', 18, 5)->nullable();
            $table->decimal('Avg_Total_region', 18, 5)->nullable();
            $table->decimal('Avg_Total_LCP', 18, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_NewFF_LLP_Costs');
    }
}
