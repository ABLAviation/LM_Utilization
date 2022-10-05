<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOTHERMAJORCOMPONENTSMXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OTHERMAJORCOMPONENTS_MX', function (Blueprint $table) {
            $table->increments('ID_OMC_MX');
            $table->integer('ID_OMC')->nullable();
            $table->integer('ID_AircraftVariant')->nullable();
            $table->string('VAR_MOD', 5)->nullable();
            $table->integer('ID_EngineModel')->nullable();
            $table->integer('ID_EVENT_UNIT')->nullable();
            $table->integer('ID_SOURCE')->nullable();
            $table->integer('ID_OPERATOR')->nullable();
            $table->integer('ID_MSN')->nullable();
            $table->date('DateOfSourceDATA')->nullable();
            $table->decimal('OMC_COST_MIN', 20, 10);
            $table->decimal('OMC_COST_MAX', 20, 10)->nullable();
            $table->decimal('MATERIAL_COST_MIN', 18, 5)->nullable();
            $table->decimal('MATERIAL_COST_MAX', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MIN', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MAX', 18, 5)->nullable();
            $table->integer('ID_CURRENCY');
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->decimal('Reverser_TOW1', 18, 7)->nullable();
            $table->float('Reverser_Mat_Cyc_CostperFC', 0, 0)->nullable();
            $table->integer('Nb_reversers')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OTHERMAJORCOMPONENTS_MX');
    }
}
