<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCOUNTRIESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COUNTRIES', function (Blueprint $table) {
            $table->increments('ID_COUNTRY');
            $table->integer('ID_CONTINENT');
            $table->integer('ID_REGION');
            $table->integer('ID_AIRSPACE');
            $table->integer('ID_AUTHORITY')->nullable();
            $table->string('COUNTRY_NAME', 50);
            $table->string('COUNTRY_CODE', 5)->nullable();
            $table->string('AreaOfOperation', 20)->nullable();
            $table->string('Registration_Prefixe', 20)->nullable();
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
        Schema::dropIfExists('COUNTRIES');
    }
}
