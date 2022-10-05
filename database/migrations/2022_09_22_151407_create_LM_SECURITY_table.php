<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLMSECURITYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LM_SECURITY', function (Blueprint $table) {
            $table->increments('ID_LM_SECURITY');
            $table->integer('ID_ABLDEALS');
            $table->string('SECURITY_DESCRIPTION', 250);
            $table->date('SECURITY_DUEDATE')->nullable();
            $table->decimal('SECURITY_AMOUNT', 18, 5);
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
        Schema::dropIfExists('LM_SECURITY');
    }
}
