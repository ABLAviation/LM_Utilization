<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPUMXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('APU_MX', function (Blueprint $table) {
            $table->increments('ID_APU_MX');
            $table->integer('APU_ID')->nullable();
            $table->integer('ID_EVENT_UNIT')->nullable();
            $table->integer('ID_SOURCE');
            $table->integer('ID_OPERATOR')->nullable();
            $table->integer('ID_MSN')->nullable();
            $table->date('DateOfSourceDATA')->nullable();
            $table->decimal('APU_EVENT_COST_MIN', 18, 5)->nullable();
            $table->decimal('APU_EVENT_COST_MAX', 18, 5)->nullable();
            $table->decimal('MATERIAL_COST_MIN', 18, 5)->nullable();
            $table->decimal('MATERIAL_COST_MAX', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MIN', 18, 5)->nullable();
            $table->decimal('LABOUR_COST_MAX', 18, 5)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->integer('ID_CURRENCY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('APU_MX');
    }
}
