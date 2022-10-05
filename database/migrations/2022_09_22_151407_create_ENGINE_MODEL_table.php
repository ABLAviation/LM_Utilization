<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINEMODELTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_MODEL', function (Blueprint $table) {
            $table->increments('ID_ENGINE_MODEL');
            $table->integer('ID_ENGINE_SERIES');
            $table->integer('ID_ESN')->nullable();
            $table->string('MODEL_CAPTION', 250);
            $table->string('ENGINE_VARIANT', 250);
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
        Schema::dropIfExists('ENGINE_MODEL');
    }
}
