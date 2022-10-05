<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetEnginePRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Engine_PR', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Engine_PR');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->string('EngineManufacturer', 250)->nullable();
            $table->string('EngineVariant', 250)->nullable();
            $table->integer('ESN');
            $table->integer('EngineNumber_Position')->nullable();
            $table->string('Engine_Thrust_Rating')->nullable();
            $table->string('Engine_Thrust_Operated')->nullable();
            $table->string('Engine_Thrust_Owned')->nullable();
            $table->date('DateofManufacture')->nullable();
            $table->decimal('TSN', 18, 5)->nullable();
            $table->decimal('CSN', 18, 5)->nullable();
            $table->float('Engine_Ratio', 0, 0)->nullable();
            $table->string('LLP_Limiter', 250)->nullable();
            $table->string('LLP_Cycles_Remaining')->nullable();
            $table->date('Status_As_Of')->nullable();
            $table->date('Date_of_LSV')->nullable();
            $table->string('Reason_of_SV', 2500)->nullable();
            $table->string('TSN_at_SV')->nullable();
            $table->string('CSN_at_SV')->nullable();
            $table->integer('Days_SLSV')->nullable();
            $table->string('TSLSV')->nullable();
            $table->string('CSLSV')->nullable();
            $table->string('Maintenance_Facility', 250)->nullable();
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
        Schema::dropIfExists('SpecSheet_Engine_PR');
    }
}
