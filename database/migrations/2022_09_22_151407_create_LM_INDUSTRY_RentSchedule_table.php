<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYRentScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_RentSchedule', function (Blueprint $table) {
            $table->increments('ID_Rentschedule');
            $table->integer('ID_LM_Summ');
            $table->date('DueDate')->nullable();
            $table->string('Rent_Type', 250)->nullable();
            $table->decimal('Assumed_Rent', 18, 5)->nullable();
            $table->decimal('Additional_Adjustment', 18, 5)->nullable();
            $table->decimal('Amount_Due', 18, 5)->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_RentSchedule');
    }
}
