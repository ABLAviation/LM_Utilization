<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateREDELIVERYCONDITIONSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REDELIVERYCONDITIONS', function (Blueprint $table) {
            $table->increments('ID_REDELIVERY');
            $table->integer('ID_MAJORCOMPONENT');
            $table->integer('ID_EVENT_TYPE')->nullable();
            $table->string('REDELIVERY_DESCRIPTION', 250);
            $table->decimal('MIN_COST', 18, 5)->nullable();
            $table->decimal('MAX_COST', 18, 5)->nullable();
            $table->float('MAINTENANCEDURATION_MONTHS', 0, 0)->nullable();
            $table->integer('ID_CURRENCY');
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
        Schema::dropIfExists('REDELIVERYCONDITIONS');
    }
}
