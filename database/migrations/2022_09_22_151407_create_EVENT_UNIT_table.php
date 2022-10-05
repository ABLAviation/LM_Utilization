<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEVENTUNITTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EVENT_UNIT', function (Blueprint $table) {
            $table->increments('ID_EVENT_UNIT');
            $table->integer('ID_UNIT_TYPE');
            $table->string('EVENTUNIT_CAPTION', 50);
            $table->integer('ID_EVENT_TYPE');
            $table->integer('EVENTUNIT_NumOfMonths')->nullable();
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
        Schema::dropIfExists('EVENT_UNIT');
    }
}
