<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNewFFACMTBRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_NewFF_AC_MTBR', function (Blueprint $table) {
            $table->increments('ID_Z_NewFF_AC_MTBR');
            $table->string('Application_Name', 250)->nullable();
            $table->string('Proc_name', 250)->nullable();
            $table->dateTime('Execution_date')->nullable();
            $table->date('StartDate_param')->nullable();
            $table->date('EndDate_param')->nullable();
            $table->string('mp', 250)->nullable();
            $table->string('ac_type', 250)->nullable();
            $table->string('event', 250)->nullable();
            $table->string('interval_month', 250)->nullable();
            $table->string('interval_fh', 250)->nullable();
            $table->string('interval_fc', 250)->nullable();
            $table->decimal('maint_time', 18, 5)->nullable();
            $table->string('description_jpn', 3000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_NewFF_AC_MTBR');
    }
}
