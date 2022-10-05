<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MPD', function (Blueprint $table) {
            $table->increments('ID_MPD');
            $table->integer('REV_NUMBER');
            $table->string('TASK_NUMBER', 250);
            $table->integer('ID_AIRCRAFTVARIANT');
            $table->date('ISSUE_DATE')->nullable();
            $table->string('REV_CODE', 250)->nullable();
            $table->string('SECTION', 2500)->nullable();
            $table->string('SOURCETASK_REF', 2500)->nullable();
            $table->string('ACCESS', 2500)->nullable();
            $table->string('PREPARATION', 2500)->nullable();
            $table->string('MPD_ZONE', 2500)->nullable();
            $table->string('MPD_DESCRIPTION', 2500)->nullable();
            $table->string('SKILLCODE', 250)->nullable();
            $table->string('TASKCODE', 250)->nullable();
            $table->string('SAMPLETRESHOLD', 50)->nullable();
            $table->string('SAMPLEINTERVAL', 50)->nullable();
            $table->string('PERCENTTRESHOLD', 250)->nullable();
            $table->string('PERCENTINTERVAL', 250)->nullable();
            $table->string('MPD_SOURCE', 250)->nullable();
            $table->string('TCI', 250)->nullable();
            $table->string('TPS', 250)->nullable();
            $table->string('REFERENCE', 250)->nullable();
            $table->string('MEN', 250)->nullable();
            $table->string('TASK_M_H', 250)->nullable();
            $table->string('ACCESS_M_H', 2500)->nullable();
            $table->string('PREP_M_H', 250)->nullable();
            $table->string('APPLICABILITY', 2500)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MPD');
    }
}
