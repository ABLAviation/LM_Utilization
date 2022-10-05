<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYDeliveryBaseReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_DeliveryBaseReadings', function (Blueprint $table) {
            $table->increments('ID_Del_Base_Readings');
            $table->integer('ID_Del_Head');
            $table->integer('ID_MajComp')->nullable();
            $table->string('SN', 250)->nullable();
            $table->string('Reading', 250)->nullable();
            $table->float('Months', 0, 0)->nullable();
            $table->float('FH', 0, 0)->nullable();
            $table->float('FC', 0, 0)->nullable();
            $table->float('BlockHours', 0, 0)->nullable();
            $table->float('APUH', 0, 0)->nullable();
            $table->float('APUCy', 0, 0)->nullable();
            $table->string('Value', 250)->nullable();
            $table->text('COMMENTS')->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_DeliveryBaseReadings');
    }
}
