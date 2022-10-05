<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateADLinkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AD_Linking', function (Blueprint $table) {
            $table->increments('ID_ADLinking');
            $table->string('ID_AIRCRAFTVARIANT', 50)->nullable();
            $table->string('ID_ENGINEMODEL', 50)->nullable();
            $table->integer('ID_AD')->nullable();
            $table->string('CreatedBy', 20)->nullable();
            $table->dateTime('CreationDate')->nullable();
            $table->string('ModifiedBy', 20)->nullable();
            $table->dateTime('ModificationDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AD_Linking');
    }
}
