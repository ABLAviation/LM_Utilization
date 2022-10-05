<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMINDUSTRYSecurityStipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_INDUSTRY_SecurityStip', function (Blueprint $table) {
            $table->increments('ID_LMSEC_STIP');
            $table->integer('ID_LMSecurity');
            $table->date('DueDate')->nullable();
            $table->string('Type_LMSECSTIP', 250)->nullable();
            $table->string('Refundable', 250)->nullable();
            $table->string('Against', 250)->nullable();
            $table->decimal('Amount', 18, 5)->nullable();
            $table->integer('ID_Currency')->nullable();
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
        Schema::dropIfExists('LM_INDUSTRY_SecurityStip');
    }
}
