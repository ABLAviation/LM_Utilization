<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYINSURSTIPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_INSUR_STIP', function (Blueprint $table) {
            $table->increments('ID_INSUR_STIP');
            $table->integer('ID_LM_Summ')->nullable();
            $table->string('Type_InsurStip', 250)->nullable();
            $table->string('Requirement', 250)->nullable();
            $table->string('Variability', 250)->nullable();
            $table->decimal('Deductible_Amount', 18, 5)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_INSUR_STIP');
    }
}
