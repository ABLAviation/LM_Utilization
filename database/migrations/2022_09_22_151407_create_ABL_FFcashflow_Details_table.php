<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABLFFcashflowDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ABL_FFcashflow_Details', function (Blueprint $table) {
            $table->string('ID_Details', 250)->primary();
            $table->date('DatePeriod');
            $table->decimal('MX_Income', 18, 5)->nullable();
            $table->decimal('MX_Expense', 18, 5)->nullable();
            $table->decimal('MX_Cost', 18, 5)->nullable();
            $table->decimal('Lessor_Cont', 18, 5)->nullable();
            $table->decimal('Lessee_Cont', 18, 5)->nullable();
            $table->string('Event_Desc', 250)->nullable();
            $table->decimal('HL_Adjustment', 18, 5)->nullable();
            $table->float('Percent_life', 0, 0)->nullable();
            $table->decimal('EOL_Comp', 18, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ABL_FFcashflow_Details');
    }
}
