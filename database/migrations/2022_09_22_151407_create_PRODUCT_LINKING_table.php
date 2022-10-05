<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePRODUCTLINKINGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCT_LINKING', function (Blueprint $table) {
            $table->increments('ID_PRODUCT_LINKING');
            $table->integer('ID_AircraftVariant')->nullable();
            $table->integer('ID_EngineModel')->nullable();
            $table->integer('ID_PRODUCT_INFO');
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
        Schema::dropIfExists('PRODUCT_LINKING');
    }
}
