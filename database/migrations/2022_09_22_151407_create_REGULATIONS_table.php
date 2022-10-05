<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateREGULATIONSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REGULATIONS', function (Blueprint $table) {
            $table->increments('ID_REGULATION');
            $table->integer('ID_Modification')->nullable();
            $table->string('REGULATION_DESCRIPTION', 250)->nullable();
            $table->date('REGULATION_DateOfApplicability')->nullable();
            $table->string('REGULATION_CONDITION', 2500)->nullable();
            $table->string('REGULATION_COMMENTS', 2500)->nullable();
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
        Schema::dropIfExists('REGULATIONS');
    }
}
