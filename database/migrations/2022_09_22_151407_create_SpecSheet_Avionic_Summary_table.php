<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAvionicSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Avionic_Summary', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Avionic_Summary');
            $table->integer('MSN');
            $table->string('ACType', 250)->nullable();
            $table->date('Date_of_data')->nullable();
            $table->string('ATA', 250)->nullable();
            $table->string('Description', 250)->nullable();
            $table->float('Qty', 0, 0)->nullable();
            $table->string('Manufacturer', 250)->nullable();
            $table->string('Model_PN', 250)->nullable();
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
        Schema::dropIfExists('SpecSheet_Avionic_Summary');
    }
}
