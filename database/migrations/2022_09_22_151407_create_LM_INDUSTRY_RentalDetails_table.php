<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYRentalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_RentalDetails', function (Blueprint $table) {
            $table->increments('ID_RentalDetails');
            $table->integer('ID_LM_Summ');
            $table->string('Rent_Type', 250)->nullable();
            $table->string('Period_RentDet', 250)->nullable();
            $table->string('Rent_ScheduleName', 250)->nullable();
            $table->string('DueDate', 250)->nullable();
            $table->decimal('Contractual_Amount', 18, 5)->nullable();
            $table->decimal('Contractual_Aggr_Adj', 18, 5)->nullable();
            $table->decimal('TotalDue', 18, 5)->nullable();
            $table->string('LatePaymentInterest_InterestIndex', 2500)->nullable();
            $table->string('LatePaymentInterest_Margin', 50)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_RentalDetails');
    }
}
