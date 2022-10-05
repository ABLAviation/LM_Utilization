<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_Security', function (Blueprint $table) {
            $table->increments('ID_LMSecurity');
            $table->integer('ID_LM_Summ');
            $table->decimal('TotalAll_LeaseObligations', 18, 5)->nullable();
            $table->string('Maintenance_Structure', 250)->nullable();
            $table->string('Maintenance_Event', 250)->nullable();
            $table->decimal('Amount_received_from_current_lessee', 18, 5)->nullable();
            $table->decimal('Contribution_per_acceptance_cert', 18, 5)->nullable();
            $table->decimal('Opening_Balance', 18, 5)->nullable();
            $table->decimal('Current_Balance', 18, 5)->nullable();
            $table->decimal('Total_Invoiced', 18, 5)->nullable();
            $table->decimal('Accounting_Balance', 18, 5)->nullable();
            $table->decimal('Cash_Balance', 18, 5)->nullable();
            $table->decimal('Fund_Balance', 18, 5)->nullable();
            $table->decimal('Total_Maintenance', 18, 5)->nullable();
            $table->decimal('Total_Other', 18, 5)->nullable();
            $table->decimal('GrandTotalStipulations', 18, 5)->nullable();
            $table->decimal('TotalCashTransactions', 18, 5)->nullable();
            $table->decimal('TotalNonCashTransactions', 18, 5)->nullable();
            $table->decimal('GrandTotalTransactions', 18, 5)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_Security');
    }
}
