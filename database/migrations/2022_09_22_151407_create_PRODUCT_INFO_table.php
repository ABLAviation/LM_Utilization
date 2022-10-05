<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePRODUCTINFOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCT_INFO', function (Blueprint $table) {
            $table->increments('ID_PRODUCT');
            $table->integer('ID_SUPPLIER');
            $table->integer('ID_MODIFICATION');
            $table->string('Product_Description', 250);
            $table->string('KIT_Description', 2500)->nullable();
            $table->string('LeadTime', 2500)->nullable();
            $table->decimal('Price_MIN', 18, 5)->nullable();
            $table->decimal('Price_MAX', 18, 5)->nullable();
            $table->string('Price_Year', 4);
            $table->string('Payment_Term', 250)->nullable();
            $table->string('Warranty', 250)->nullable();
            $table->string('Remarks', 250)->nullable();
            $table->integer('ID_CURRENCY')->nullable();
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
        Schema::dropIfExists('PRODUCT_INFO');
    }
}
