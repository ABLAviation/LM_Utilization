<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_Parties', function (Blueprint $table) {
            $table->increments('ID_Party');
            $table->integer('ID_LM_Summ');
            $table->integer('ID_Role')->nullable();
            $table->integer('ID_Source')->nullable();
            $table->date('Startdate')->nullable();
            $table->date('Enddate')->nullable();
            $table->integer('ID_Country')->nullable();
            $table->string('COMMENTS', 2500)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_Parties');
    }
}
