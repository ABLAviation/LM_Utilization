<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetEngineSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Engine_Summary', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Engine_Summary');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->integer('ESN');
            $table->string('EngineVariant', 250)->nullable();
            $table->decimal('TSN', 18, 5)->nullable();
            $table->decimal('CSN', 18, 5)->nullable();
            $table->float('Engine_Ratio', 0, 0)->nullable();
            $table->string('LLP_Limiter', 250)->nullable();
            $table->string('Engine_LimitingCycles')->nullable();
            $table->string('FH_Performed_DuringMonth')->nullable();
            $table->string('FC_Performed_DuringMonth')->nullable();
            $table->integer('Engine_Run')->nullable();
            $table->date('Status_as_of')->nullable();
            $table->string('Location_by_MSN', 250)->nullable();
            $table->string('Location_by_Registration', 250)->nullable();
            $table->string('Location_by_TailNumber', 250)->nullable();
            $table->date('Forecast_Date')->nullable();
            $table->string('TakeOff_EGT_Margin', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
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
        Schema::dropIfExists('SpecSheet_Engine_Summary');
    }
}
