<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSEVERITYGROUPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SEVERITY_GROUP', function (Blueprint $table) {
            $table->increments('ID_SEVERITY');
            $table->float('SEVERITY_MIN', 0, 0);
            $table->float('SEVERITY_MAX', 0, 0);
            $table->integer('ID_SOURCE');
            $table->date('DateOfSourceDATA');
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
        Schema::dropIfExists('SEVERITY_GROUP');
    }
}
