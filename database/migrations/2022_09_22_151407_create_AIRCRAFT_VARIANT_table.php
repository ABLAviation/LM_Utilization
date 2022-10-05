<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAIRCRAFTVARIANTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AIRCRAFT_VARIANT', function (Blueprint $table) {
            $table->increments('ID_AIRCRAFT_VARIANT');
            $table->integer('Aircraft_ID');
            $table->integer('MSN_ID');
            $table->string('AIRCRAFTVARIANT_CAPTION', 50)->nullable();
            $table->string('RegistrationNumber', 50)->nullable();
            $table->integer('Registration_CountryID')->nullable();
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
        Schema::dropIfExists('AIRCRAFT_VARIANT');
    }
}
