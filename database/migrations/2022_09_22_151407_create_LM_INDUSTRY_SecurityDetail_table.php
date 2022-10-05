<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYSecurityDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_SecurityDetail', function (Blueprint $table) {
            $table->increments('ID_LMSEC_DETAIL');
            $table->integer('ID_LMSecurity');
            $table->string('Type_LMSEC', 250)->nullable();
            $table->string('Reference', 250)->nullable();
            $table->string('Type_noncash', 250)->nullable();
            $table->string('Status_noncash', 250)->nullable();
            $table->date('IssueDate')->nullable();
            $table->date('ExpiryDate')->nullable();
            $table->decimal('Amount', 18, 5)->nullable();
            $table->string('Pledged', 250)->nullable();
            $table->string('Pledged_TO', 250)->nullable();
            $table->string('Beneficiary', 250)->nullable();
            $table->string('Original_LOC_Location', 250)->nullable();
            $table->string('Confirming_LOCLocation', 250)->nullable();
            $table->string('Issuing_Bank', 250)->nullable();
            $table->string('Issuing_Bank_Reference', 250)->nullable();
            $table->string('Confirming_Bank', 250)->nullable();
            $table->string('Confirming_Bank_Reference', 250)->nullable();
            $table->string('Presenting_Bank', 250)->nullable();
            $table->string('Advising_Bank', 250)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_SecurityDetail');
    }
}
