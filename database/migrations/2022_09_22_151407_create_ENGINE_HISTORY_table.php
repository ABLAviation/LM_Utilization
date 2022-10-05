<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINEHISTORYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_HISTORY', function (Blueprint $table) {
            $table->increments('ID_ENGINE_HISTORY');
            $table->integer('ID_MSN');
            $table->integer('ID_ESN');
            $table->date('InstallationDate');
            $table->date('RemovalDate')->nullable();
            $table->string('RemovalReason', 250)->nullable();
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
        Schema::dropIfExists('ENGINE_HISTORY');
    }
}
