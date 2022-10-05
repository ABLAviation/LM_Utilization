<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYETASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_ETAS', function (Blueprint $table) {
            $table->increments('ID_ETAS');
            $table->integer('ID_LM_Summ');
            $table->string('Reference', 250)->nullable();
            $table->string('Component', 250)->nullable();
            $table->decimal('Amount', 18, 5)->nullable();
            $table->date('completion_date')->nullable();
            $table->string('Etas_Status', 250)->nullable();
            $table->string('Significant', 50)->nullable();
            $table->string('Etas_Description', 2500)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_ETAS');
    }
}
