<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMODULESLISTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MODULES_LIST', function (Blueprint $table) {
            $table->increments('ID_MODULE');
            $table->string('Module_Caption', 50);
            $table->string('Commercial_Name', 50)->nullable();
            $table->integer('EngineModel_ID')->nullable();
            $table->float('ModuleSplit_percentage_overhaulEngine', 0, 0)->nullable();
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
        Schema::dropIfExists('MODULES_LIST');
    }
}
