<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUSERSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USERS', function (Blueprint $table) {
            $table->increments('ID_USER');
            $table->string('USER_NAME', 250);
            $table->string('USER_EMAIL', 250);
            $table->string('USER_PASSWORD', 500);
            $table->string('CreatedBy', 250);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 250);
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
        Schema::dropIfExists('USERS');
    }
}
