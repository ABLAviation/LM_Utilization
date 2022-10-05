<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSOURCESLISTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SOURCES_LIST', function (Blueprint $table) {
            $table->increments('ID_SOURCE');
            $table->string('Company_Name', 100);
            $table->string('Company_Catagory', 50);
            $table->string('Company_Type', 50);
            $table->string('Company_Address', 500)->nullable();
            $table->string('Company_Status', 50);
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
        Schema::dropIfExists('SOURCES_LIST');
    }
}
