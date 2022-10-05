<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateESNENGINELINKINGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ESN_ENGINE_LINKING', function (Blueprint $table) {
            $table->increments('ID_ESN_ENGINE_LINKING');
            $table->integer('ID_ESN');
            $table->integer('ID_EngineModel');
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
        Schema::dropIfExists('ESN_ENGINE_LINKING');
    }
}
