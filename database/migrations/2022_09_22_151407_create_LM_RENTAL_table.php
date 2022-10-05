<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMRENTALTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_RENTAL', function (Blueprint $table) {
            $table->increments('ID_LM_RENTAL');
            $table->integer('ID_ABLDEALS');
            $table->decimal('MONTHLY_RENT_AMOUNT', 18, 5)->nullable();
            $table->date('RENT_PAYMENTDATE')->nullable();
            $table->smallInteger('IS_RENTALINVOICECREATED')->nullable();
            $table->date('RENTALINVOICE_CREATIONDATE')->nullable();
            $table->string('RENTALINVOICE_CREATEDBY', 50)->nullable();
            $table->smallInteger('IS_INVOICEAPPROVED')->nullable();
            $table->string('INVOICE_APPROVEDBY', 50)->nullable();
            $table->date('INVOICE_APPROVALDATE')->nullable();
            $table->smallInteger('IS_INVOICESENT')->nullable();
            $table->date('INVOICE_SENDINGDATE')->nullable();
            $table->date('RENTALPAYMENT_MONTHLYDUEDATE')->nullable();
            $table->smallInteger('IS_RENTALPAYMENTRECEIVED')->nullable();
            $table->date('RENTALPAYMENT_RECEIVINGDATE')->nullable();
            $table->string('BANK_NAME', 250)->nullable();
            $table->string('BANK_ACCOUNTNUMBER', 50)->nullable();
            $table->integer('ID_CURRENCY');
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
        Schema::dropIfExists('LM_RENTAL');
    }
}
