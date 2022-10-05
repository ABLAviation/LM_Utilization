<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLANDINGGEARTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LANDING_GEAR', function (Blueprint $table) {
            $table->increments('ID_LDG');
            $table->integer('ID_AIRCRAFTVARIANT');
            $table->string('VAR_OR_MOD', 3)->nullable();
            $table->integer('LDG_POSITION_ID');
            $table->decimal('LDG_Interval_Month', 18, 5)->nullable();
            $table->decimal('LDG_Interval_FC', 18, 5)->nullable();
            $table->decimal('LDG_Interval_FH', 18, 5)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
            $table->decimal('LDG_Lab_MH', 18, 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LANDING_GEAR');
    }
}
