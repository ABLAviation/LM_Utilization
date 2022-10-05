<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYEscalationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_EscalationDetails', function (Blueprint $table) {
            $table->increments('ID_EscalationDetails');
            $table->integer('ID_LM_Summ');
            $table->integer('ID_Event')->nullable();
            $table->integer('ID_MajorComp')->nullable();
            $table->string('SN', 250)->nullable();
            $table->string('LaborStatistics', 250)->nullable();
            $table->string('Fixed', 250)->nullable();
            $table->string('Rounding', 250)->nullable();
            $table->integer('Number_of_decimals')->nullable();
            $table->string('FH_FC_Ratio', 50)->nullable();
            $table->string('Schedule_Type', 250)->nullable();
            $table->string('Industry_Experience', 50)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_EscalationDetails');
    }
}
