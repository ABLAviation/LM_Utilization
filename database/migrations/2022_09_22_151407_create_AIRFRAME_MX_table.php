<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAIRFRAMEMXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AIRFRAME_MX', function (Blueprint $table) {
            $table->increments('ID_AIRFRAME_MX');
            $table->integer('AircraftVariant_ID');
            $table->string('VAR_OR_MOD', 3)->nullable();
            $table->integer('ID_EVENT_UNIT');
            $table->integer('ID_SOURCE');
            $table->integer('ID_OPERATOR')->nullable();
            $table->integer('ID_MaintenancePlan')->nullable();
            $table->date('DateOfSourceDATA')->nullable();
            $table->decimal('Fixed_COST_MIN', 20, 10)->nullable();
            $table->decimal('Fixed_COST_MAX', 20, 10)->nullable();
            $table->decimal('MATERIAL_COST_MIN', 18, 5)->nullable();
            $table->decimal('MATERIAL_COST_MAX', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MIN', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MAX', 18, 5)->nullable();
            $table->float('MATERIAL_HANDLINGFEE', 0, 0)->nullable();
            $table->integer('ID_CURRENCY');
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->float('Airframe_CostperMH', 0, 0)->nullable();
            $table->decimal('Airframe_MH', 18, 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AIRFRAME_MX');
    }
}
