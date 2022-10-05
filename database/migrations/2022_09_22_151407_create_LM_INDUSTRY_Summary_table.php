<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_Summary', function (Blueprint $table) {
            $table->increments('ID_LM_Summ');
            $table->integer('Operator_ID');
            $table->string('MSN', 250)->nullable();
            $table->string('ACType', 250)->nullable();
            $table->date('Date_of_build')->nullable();
            $table->string('Registration_number', 250)->nullable();
            $table->integer('Registration_country')->nullable();
            $table->string('ESN1', 250)->nullable();
            $table->string('Eng1_position', 250)->nullable();
            $table->string('ESN2', 250)->nullable();
            $table->string('Eng2_position', 250)->nullable();
            $table->string('ESN3', 250)->nullable();
            $table->string('Eng3_position', 250)->nullable();
            $table->string('ESN4', 250)->nullable();
            $table->string('Eng4_position', 250)->nullable();
            $table->string('Headleases_Legal', 250)->nullable();
            $table->string('Lease_Type_Legal', 250)->nullable();
            $table->date('Lease_Contract_Date')->nullable();
            $table->string('Contractual_Lease_Term', 250)->nullable();
            $table->string('Remaining_Lease_Term', 250)->nullable();
            $table->string('Governing_Law', 250)->nullable();
            $table->string('ChoiceofForum', 250)->nullable();
            $table->date('Contractual_Delivery_Date')->nullable();
            $table->date('Actual_Delivery_Date')->nullable();
            $table->date('Contractual_Redelivery_Date')->nullable();
            $table->date('Lease_Novation_Date')->nullable();
            $table->date('Actual_Redelivery_Date')->nullable();
            $table->string('Right_to_SubLease_without_Approval', 250)->nullable();
            $table->string('SubLease_Fee', 250)->nullable();
            $table->string('ActualSubLeaseDetails_COMMENTS', 2500)->nullable();
            $table->string('Right_to_WetLease_without_Approval', 250)->nullable();
            $table->string('WetLease_Fee', 250)->nullable();
            $table->string('Interest_Accrual', 250)->nullable();
            $table->string('MR_Payment_Obligation', 250)->nullable();
            $table->date('Billing_Commence')->nullable();
            $table->string('Invoice_Reporting_frequency', 250)->nullable();
            $table->string('Reporting_dueday', 250)->nullable();
            $table->date('Invoice_due')->nullable();
            $table->string('Correction_for_nonbusiness_days', 250)->nullable();
            $table->string('Pledged', 250)->nullable();
            $table->date('Lease_Start_Date')->nullable();
            $table->date('Lease_End_Date')->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_Summary');
    }
}
