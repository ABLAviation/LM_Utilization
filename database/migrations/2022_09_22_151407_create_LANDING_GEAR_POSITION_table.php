<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLANDINGGEARPOSITIONTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LANDING_GEAR_POSITION', function (Blueprint $table) {
            $table->increments('ID_LDG_POSITION');
            $table->string('MANUFACTURER', 50)->nullable();
            $table->string('Description', 50);
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
        Schema::dropIfExists('LANDING_GEAR_POSITION');
    }
}
