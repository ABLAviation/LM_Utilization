<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINELLPMXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_LLP_MX', function (Blueprint $table) {
            $table->increments('ID_ENGINELLP_MX');
            $table->integer('ID_EngineModel')->nullable();
            $table->integer('ID_EVENT_UNIT')->nullable();
            $table->integer('ID_OPERATOR')->nullable();
            $table->integer('ID_SOURCE')->nullable();
            $table->string('ID_PARTNUMBER', 250)->nullable();
            $table->integer('ID_MODULE')->nullable();
            $table->date('DATAYEAR')->nullable();
            $table->string('LLP_Description', 250)->nullable();
            $table->decimal('LifeLimit_MIN', 18, 5)->nullable();
            $table->decimal('LifeLimit_MAX', 18, 5)->nullable();
            $table->float('Annual_Escalation_Rate', 0, 0)->nullable();
            $table->decimal('LLP_COST_MIN', 18, 5)->nullable();
            $table->decimal('LLP_COST_MAX', 18, 5)->nullable();
            $table->integer('ID_CURRENCY');
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->smallInteger('Is_Backcasting')->nullable();
            $table->integer('Is_CLP')->nullable();
            $table->decimal('LLP_Global_price', 18, 7)->nullable();
            $table->string('Core_Module', 10)->nullable();
            $table->integer('LLP_Order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ENGINE_LLP_MX');
    }
}
