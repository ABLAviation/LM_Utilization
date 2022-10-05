<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINEFACTORSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_FACTORS', function (Blueprint $table) {
            $table->increments('ID_ENGINE_FACTORS');
            $table->integer('ID_ENGINE_MODEL');
            $table->integer('ID_ENGINE_RUN')->nullable();
            $table->date('DateOfSourceDATA')->nullable();
            $table->float('DERATE', 0, 0)->nullable();
            $table->float('UTILIZATION_FH', 0, 0)->nullable();
            $table->float('FC_FH_RATIO', 0, 0)->nullable();
            $table->float('SVR', 0, 0)->nullable();
            $table->float('EAF', 0, 0)->nullable();
            $table->string('Operating_ENV', 50)->nullable();
            $table->float('SPECIFIC_PERCENTAGE_INCREASE', 0, 0)->nullable();
            $table->decimal('SPECIFIC_THRUST', 18, 5)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->float('SVC', 0, 0)->nullable();
            $table->float('TOW', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ENGINE_FACTORS');
    }
}
