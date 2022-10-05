<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('APU', function (Blueprint $table) {
            $table->increments('ID_APU');
            $table->integer('AircraftVariant_ID');
            $table->string('VAR_OR_MOD', 3)->nullable();
            $table->string('Model', 50)->nullable();
            $table->string('PartNumber', 50)->nullable();
            $table->decimal('APU_INTERVAL_APUH', 18, 5)->nullable();
            $table->decimal('APU_INTERVAL_APUCy', 18, 5)->nullable();
            $table->decimal('APU_INTERVAL_FH', 18, 5)->nullable();
            $table->decimal('APU_INTERVAL_FC', 18, 5)->nullable();
            $table->decimal('APU_INTERVAL_MONTH', 18, 5)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->decimal('APU_Lab_MH', 18, 7)->nullable();
            $table->float('APUoh_perCycle', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('APU');
    }
}
