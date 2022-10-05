<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetEngineLLPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Engine_LLP', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Engine_LLP');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->string('EngineVariant', 250)->nullable();
            $table->integer('ESN');
            $table->integer('EngineNumber_Position')->nullable();
            $table->integer('Module')->nullable();
            $table->string('LLP_Description', 250)->nullable();
            $table->string('LLP_PartNumber', 250)->nullable();
            $table->string('LLP_SerialNumber', 250)->nullable();
            $table->string('LLP_Life_Limit')->nullable();
            $table->string('Cycles_Since_New')->nullable();
            $table->string('Cycles_Remaining')->nullable();
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
        Schema::dropIfExists('SpecSheet_Engine_LLP');
    }
}
