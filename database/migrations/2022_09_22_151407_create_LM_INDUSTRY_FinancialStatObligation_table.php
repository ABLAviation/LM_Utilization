<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYFinancialStatObligationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_FinancialStatObligation', function (Blueprint $table) {
            $table->increments('ID_FinStatOblig');
            $table->integer('ID_LM_Summ');
            $table->string('Finc_Type', 250)->nullable();
            $table->string('Finc_required', 25)->nullable();
            $table->string('Frequency', 250)->nullable();
            $table->integer('Copies')->nullable();
            $table->string('Guarantor', 250)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_FinancialStatObligation');
    }
}
