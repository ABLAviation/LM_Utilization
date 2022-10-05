<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYEOLTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_EOL', function (Blueprint $table) {
            $table->increments('ID_EOL');
            $table->integer('ID_LM_Summ');
            $table->integer('ID_Event')->nullable();
            $table->integer('ID_MajorComp')->nullable();
            $table->string('SN', 250)->nullable();
            $table->string('Excess_Refund', 250)->nullable();
            $table->string('Compensation_Time', 2500)->nullable();
            $table->string('Compensation_Type', 2500)->nullable();
            $table->string('Compensation_Base', 2500)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_EOL');
    }
}
