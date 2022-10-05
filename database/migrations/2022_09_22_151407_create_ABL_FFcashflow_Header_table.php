<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABLFFcashflowHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ABL_FFcashflow_Header', function (Blueprint $table) {
            $table->string('ID_Header', 250)->primary();
            $table->string('CRM_Tech_GUID', 250);
            $table->string('CRM_Tech_Name', 250)->nullable();
            $table->string('MSN', 250)->nullable();
            $table->string('AcType', 250)->nullable();
            $table->date('DOM')->nullable();
            $table->integer('Lease_extension_type');
            $table->dateTime('FF_Date');
            $table->string('FF_User', 250)->nullable();
            $table->string('MrType', 50)->nullable();
            $table->string('FF_FileName', 250)->nullable();
            $table->string('FF_FileLocation', 250)->nullable();
            $table->integer('Validflag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ABL_FFcashflow_Header');
    }
}
