<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGROUNDINGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GROUNDING', function (Blueprint $table) {
            $table->increments('ID_GROUNDING');
            $table->integer('ID_EVENT_TYPE');
            $table->string('Event_description_for_ref', 250)->nullable();
            $table->string('Equipment_Type', 50)->nullable();
            $table->float('Grounding_Time_Months', 0, 0)->nullable();
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
        Schema::dropIfExists('GROUNDING');
    }
}
