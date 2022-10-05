<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetHMUTRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_HMUTR', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_HMUTR');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->date('Status_as_of')->nullable();
            $table->string('Mfg_Type', 250)->nullable();
            $table->string('PartNumber', 250)->nullable();
            $table->string('Position', 250)->nullable();
            $table->string('Serial_Number', 250)->nullable();
            $table->decimal('TSN', 18, 5)->nullable();
            $table->decimal('CSN', 18, 5)->nullable();
            $table->decimal('TSO', 18, 5)->nullable();
            $table->decimal('CSO', 18, 5)->nullable();
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
        Schema::dropIfExists('SpecSheet_HMUTR');
    }
}
