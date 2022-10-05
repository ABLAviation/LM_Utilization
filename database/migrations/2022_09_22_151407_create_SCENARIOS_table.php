<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSCENARIOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SCENARIOS', function (Blueprint $table) {
            $table->increments('ID_SCENARIO');
            $table->string('SCENARIO_DESCRIPTION', 250);
            $table->integer('SCENARIO_DurationMonths')->nullable();
            $table->string('SCENARIO_BaseLineDate', 250)->nullable();
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
        Schema::dropIfExists('SCENARIOS');
    }
}
