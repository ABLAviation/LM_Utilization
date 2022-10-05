<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYReDeliveryCondDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_ReDeliveryCond_Details', function (Blueprint $table) {
            $table->increments('ID_Redel_CondDetails');
            $table->integer('ID_Redel_CondHeader');
            $table->integer('ID_MajComp')->nullable();
            $table->string('SN', 250)->nullable();
            $table->integer('EventType')->nullable();
            $table->string('Serviceable', 250)->nullable();
            $table->float('Months_SLSV', 0, 0)->nullable();
            $table->float('FH_SLSV', 0, 0)->nullable();
            $table->float('FC_SLSV', 0, 0)->nullable();
            $table->float('Percent_SLSV', 0, 0)->nullable();
            $table->float('Months_TNSV', 0, 0)->nullable();
            $table->float('FH_TNSV', 0, 0)->nullable();
            $table->float('FC_TNSV', 0, 0)->nullable();
            $table->float('Percent_TNSV', 0, 0)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_ReDeliveryCond_Details');
    }
}
