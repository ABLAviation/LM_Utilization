<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABLDEALSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ABL_DEALS', function (Blueprint $table) {
            $table->increments('ID_ABL_DEALS');
            $table->integer('LESSEE_OPERATOR_ID');
            $table->integer('MSN_ID')->nullable();
            $table->integer('ESN1_ID')->nullable();
            $table->integer('ESN2_ID')->nullable();
            $table->integer('ESN3_ID')->nullable();
            $table->integer('ESN4_ID')->nullable();
            $table->integer('ID_AIRCRAFTVARIANT');
            $table->integer('ID_ENGINMODEL');
            $table->integer('APU_ID')->nullable();
            $table->string('APU_SN', 50)->nullable();
            $table->integer('LDGID')->nullable();
            $table->string('NOSE_LDG_SN', 50)->nullable();
            $table->string('MAIN_LDG_LH1_SN', 50)->nullable();
            $table->string('MAIN_LDG_RH1_SN', 50)->nullable();
            $table->string('MAIN_LDG_LH2_SN', 50)->nullable();
            $table->string('MAIN_LDG_RH2_SN', 50)->nullable();
            $table->string('MAIN_LDG_LH3_SN', 50)->nullable();
            $table->string('MAIN_LDG_RH3_SN', 50)->nullable();
            $table->float('MTOW', 0, 0)->nullable();
            $table->string('AIRCRAFTREGISTRATION_NUMBER', 50)->nullable();
            $table->integer('AIRCRAFTREGISTRATION_COUNTRYID')->nullable();
            $table->integer('AVIATIONAUTHORITY_ID')->nullable();
            $table->date('MANUFACTUREDATE')->nullable();
            $table->date('LEASESTART')->nullable();
            $table->date('LEASEEND')->nullable();
            $table->string('AIRCRAFT_OWNER', 50)->nullable();
            $table->date('SPC_STARTDATE')->nullable();
            $table->string('SPC_JURISTRICTION', 50)->nullable();
            $table->string('SPC_NAME', 50)->nullable();
            $table->string('HEADLESSOR_NAME', 50)->nullable();
            $table->string('HEADLESSOR_JURISTRICTION', 50)->nullable();
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
        Schema::dropIfExists('ABL_DEALS');
    }
}
