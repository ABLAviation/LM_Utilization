<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateESCALATIONTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ESCALATION', function (Blueprint $table) {
            $table->increments('ID_ESCALATION');
            $table->integer('ID_MAJORCOMPONENT');
            $table->integer('ID_AIRCRAFTVARIANT');
            $table->integer('ID_ENGINEMODEL');
            $table->integer('ID_MSN')->nullable();
            $table->integer('ID_SOURCE')->nullable();
            $table->integer('ID_OPERATOR')->nullable();
            $table->date('DateOfSourceDATA')->nullable();
            $table->float('MX_Escalation_Percentage', 0, 0)->nullable();
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
        Schema::dropIfExists('ESCALATION');
    }
}
