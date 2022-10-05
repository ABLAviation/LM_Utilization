<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOTHERMAJORCOMPONENTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OTHERMAJORCOMPONENTS', function (Blueprint $table) {
            $table->increments('ID_OMC');
            $table->string('OMC_TYPE', 50);
            $table->string('MANUFACTURER', 50);
            $table->string('MODEL', 50)->nullable();
            $table->string('PARTNUMBER', 50)->nullable();
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
        Schema::dropIfExists('OTHERMAJORCOMPONENTS');
    }
}
