<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINSURANCETYPESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INSURANCE_TYPES', function (Blueprint $table) {
            $table->increments('ID_LM_INSURANCE_TYPES');
            $table->integer('ID_ABLDEALS');
            $table->string('INSURANCE_DESCRIPTION', 50);
            $table->date('INSURANCE_STARTDATE')->nullable();
            $table->date('INSURANCE_RENEWALDATE')->nullable();
            $table->decimal('INSURANCE_AMOUNT', 18, 5)->nullable();
            $table->decimal('DEDUCTIONS_ALLOWABLE', 18, 5)->nullable();
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
        Schema::dropIfExists('LM_INSURANCE_TYPES');
    }
}
