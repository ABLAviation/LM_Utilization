<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAPUSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_APU_Summary', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_APU_Summary');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('APU_Manufacturer', 250)->nullable();
            $table->string('APU_PartNumber', 250)->nullable();
            $table->string('APU_Model', 250)->nullable();
            $table->string('APU_SN', 250)->nullable();
            $table->string('APU_Hours')->nullable();
            $table->string('APU_Cycles')->nullable();
            $table->float('APU_Ratio', 0, 0)->nullable();
            $table->string('LLP_Limiter', 250)->nullable();
            $table->string('LLP_LimitingCycles')->nullable();
            $table->date('Status_As_Of')->nullable();
            $table->string('APU_Hours_Performed_DuringMonth')->nullable();
            $table->string('APU_Cycles_Flown_DuringMonth')->nullable();
            $table->date('Date_of_Last_ShopVisit')->nullable();
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
        Schema::dropIfExists('SpecSheet_APU_Summary');
    }
}
