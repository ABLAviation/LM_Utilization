<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateENGINESERIESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ENGINE_SERIES', function (Blueprint $table) {
            $table->increments('ID_ENGINE_SERIES');
            $table->string('ENGINE_FAMILY', 250);
            $table->string('MANUFACTURER', 250);
            $table->string('COMMERCIAL_NAME', 50)->nullable();
            $table->integer('ID_SEVERITY')->nullable();
            $table->integer('ID_COUNTRY')->nullable();
            $table->integer('ID_REGION')->nullable();
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
        Schema::dropIfExists('ENGINE_SERIES');
    }
}
