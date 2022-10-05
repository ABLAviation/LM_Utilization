<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SB', function (Blueprint $table) {
            $table->increments('ID_SB');
            $table->integer('ID_AD')->nullable();
            $table->integer('ID_AIRCRAFTVARIANT')->nullable();
            $table->integer('ID_ENGINEMODEL')->nullable();
            $table->string('SB_REF', 2500);
            $table->integer('REV_NUMBER')->nullable();
            $table->date('PUB_DATE')->nullable();
            $table->string('TITLE', 2500)->nullable();
            $table->string('COMPLIANCE_CATEGORY', 2500)->nullable();
            $table->string('NATURE', 2500)->nullable();
            $table->string('ATA', 2500)->nullable();
            $table->string('SB_MOD', 2500)->nullable();
            $table->string('WO_REF', 2500)->nullable();
            $table->string('AIRCRAFT_TSN', 2500)->nullable();
            $table->string('AIRCRAFT_CSN', 2500)->nullable();
            $table->date('LAST_DONE')->nullable();
            $table->string('REPT_INTERVAL', 2500)->nullable();
            $table->date('NEXT_DUE')->nullable();
            $table->string('MASTER_KIT_PN', 2500)->nullable();
            $table->string('MANPOWER', 250)->nullable();
            $table->string('KIT_COST', 250)->nullable();
            $table->string('TOTAL_COST', 250)->nullable();
            $table->string('REAL_COST', 250)->nullable();
            $table->string('WEIGHT_BALANCE', 250)->nullable();
            $table->string('Comments', 250)->nullable();
            $table->string('Manhours', 250)->nullable();
            $table->string('CreatedBy', 20)->nullable();
            $table->string('CreationDate', 250)->nullable();
            $table->string('ModifiedBy', 20)->nullable();
            $table->string('ModificationDate', 250)->nullable();
            $table->integer('ID_CURRENCY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SB');
    }
}
