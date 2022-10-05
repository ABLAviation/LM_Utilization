<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEVENTTYPETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EVENT_TYPE', function (Blueprint $table) {
            $table->increments('ID_EVENT_TYPE');
            $table->string('EVENT_TYPE_CAPTION', 50);
            $table->string('EVENT_TYPE_CAPTION_JPN', 3000)->nullable();
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
        Schema::dropIfExists('EVENT_TYPE');
    }
}
