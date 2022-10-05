<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYReDeliveryCondHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_ReDeliveryCond_Header', function (Blueprint $table) {
            $table->increments('ID_Redel_CondHeader');
            $table->integer('ID_LM_Summ');
            $table->integer('Authority_ID')->nullable();
            $table->string('Livery', 2500)->nullable();
            $table->string('C_Check_lease_expiry', 250)->nullable();
            $table->string('Must_return_original_engine', 250)->nullable();
            $table->integer('Country_ID')->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_ReDeliveryCond_Header');
    }
}
