<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINEEPRMXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_EPR_MX', function (Blueprint $table) {
            $table->increments('ID_ENGINEEPR_MX');
            $table->integer('ID_EngineModel')->nullable();
            $table->integer('ID_SOURCE')->nullable();
            $table->integer('ID_MODULE')->nullable();
            $table->integer('ID_OPERATOR')->nullable();
            $table->integer('ID_EVENT_UNIT')->nullable();
            $table->date('DateOfSourceDATA')->nullable();
            $table->decimal('EPR_COST_MIN', 18, 5)->nullable();
            $table->decimal('EPR_COST_MAX', 18, 5)->nullable();
            $table->decimal('MTBR_MIN', 18, 5)->nullable();
            $table->decimal('MTBR_MAX', 18, 5)->nullable();
            $table->decimal('MATERIAL_COST_MIN', 18, 5)->nullable();
            $table->decimal('MATERIAL_COST_MAX', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MIN', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MAX', 18, 5)->nullable();
            $table->integer('ID_CURRENCY')->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->integer('ID_EngineFactors')->nullable();
            $table->float('Engine_CostperMH', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ENGINE_EPR_MX');
    }
}
