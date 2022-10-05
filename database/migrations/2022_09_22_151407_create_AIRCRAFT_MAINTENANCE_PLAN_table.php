<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAIRCRAFTMAINTENANCEPLANTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AIRCRAFT_MAINTENANCE_PLAN', function (Blueprint $table) {
            $table->increments('ID_MAINTEANCEPLAN');
            $table->integer('ID_EVENT_TYPE');
            $table->integer('ID_SOURCE');
            $table->string('MAINTEANCEPLAN_Description', 250)->nullable();
            $table->string('MP_Interval_Month', 50)->nullable();
            $table->string('MP_Interval_FC', 50)->nullable();
            $table->string('MP_Interval_FH', 50)->nullable();
            $table->integer('ID_CURRENCY')->nullable();
            $table->string('Aircraft_Type', 250)->nullable();
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
        Schema::dropIfExists('AIRCRAFT_MAINTENANCE_PLAN');
    }
}
