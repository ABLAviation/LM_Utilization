<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGENERALLMDETAILSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GENERAL_LM_DETAILS', function (Blueprint $table) {
            $table->increments('ID_GENERAL_LM_DETAILS');
            $table->integer('ID_ABLDEALS');
            $table->string('LEASE_COMPENSATIONTYPE', 50)->nullable();
            $table->date('DATE_OF_LAST_INSPECTION_')->nullable();
            $table->date('DATE_OFNEXTINSPECTION')->nullable();
            $table->date('CERTIFICATE_REGISTRATIONEXPIRY')->nullable();
            $table->date('ARC_EXPIRY')->nullable();
            $table->date('RADIOSTATION_LICENSE_EXPIRYDATE')->nullable();
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
        Schema::dropIfExists('GENERAL_LM_DETAILS');
    }
}
