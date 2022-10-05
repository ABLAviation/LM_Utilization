<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateADTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AD', function (Blueprint $table) {
            $table->increments('ID_AD');
            $table->string('AD_REF', 2500)->nullable();
            $table->string('REV_NUMBER', 2500)->nullable();
            $table->string('ID_AUTHORITY', 250)->nullable();
            $table->string('COMPLIANCE_CATEGORY', 2500)->nullable();
            $table->string('ISSUE_DATE', 50)->nullable();
            $table->string('AD_STATUS', 2500)->nullable();
            $table->string('ATA', 2500)->nullable();
            $table->string('TITLE', 2500)->nullable();
            $table->string('SUBTITLE', 2500)->nullable();
            $table->string('AD_DESCRIPTION', 2500)->nullable();
            $table->string('EFFECTIVITY', 2500)->nullable();
            $table->string('APPLICABILITY_DEADLINE', 2500)->nullable();
            $table->string('REF_PUBLICATION', 2500)->nullable();
            $table->string('Biweekly_REF', 2500)->nullable();
            $table->string('WO_REF', 2500)->nullable();
            $table->string('AIRCRAFT_TSN', 2500)->nullable();
            $table->string('AIRCRAFT_CSN', 2500)->nullable();
            $table->string('LAST_DONE', 2500)->nullable();
            $table->string('REPT_INTERVAL', 2500)->nullable();
            $table->string('NEXT_DUE', 2500)->nullable();
            $table->string('MASTER_KIT_PN', 2500)->nullable();
            $table->string('MANPOWER', 2500)->nullable();
            $table->string('KIT_COST', 250)->nullable();
            $table->string('TOTAL_COST', 250)->nullable();
            $table->string('REAL_COST', 250)->nullable();
            $table->string('WEIGHT_BALANCE', 2500)->nullable();
            $table->string('Comments', 2500)->nullable();
            $table->string('Manhours', 2500)->nullable();
            $table->integer('ID_CURRENCY')->nullable();
            $table->string('CreatedBy', 20)->nullable();
            $table->string('CreationDate', 50)->nullable();
            $table->string('ModifiedBy', 20)->nullable();
            $table->string('ModificationDate', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AD');
    }
}
