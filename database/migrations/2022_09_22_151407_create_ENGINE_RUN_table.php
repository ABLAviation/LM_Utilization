<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINERUNTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_RUN', function (Blueprint $table) {
            $table->increments('ID_ENGINE_RUN');
            $table->string('EngineRun_Description', 50);
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
        Schema::dropIfExists('ENGINE_RUN');
    }
}
