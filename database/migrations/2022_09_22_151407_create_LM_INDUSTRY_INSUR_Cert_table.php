<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYINSURCertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_INSUR_Cert', function (Blueprint $table) {
            $table->increments('ID_INSUR_Cert');
            $table->integer('ID_LM_Summ');
            $table->string('Type_InsurCert', 250)->nullable();
            $table->date('StartDate')->nullable();
            $table->date('RenewalDate')->nullable();
            $table->decimal('Insured_Amount', 18, 5)->nullable();
            $table->decimal('Deductible_Amount', 18, 5)->nullable();
            $table->integer('ID_Currency')->nullable();
            $table->string('Insurer', 250)->nullable();
            $table->string('ReInsurer', 250)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_INSUR_Cert');
    }
}
