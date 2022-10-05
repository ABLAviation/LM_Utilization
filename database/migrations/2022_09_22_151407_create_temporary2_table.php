<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporary2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary2', function (Blueprint $table) {
            $table->string('MSN', 250)->nullable();
            $table->string('HL_adjustemnt', 250)->nullable();
            $table->float('hl', 24, 0)->nullable();
            $table->float('fl', 24, 0)->nullable();
            $table->float('baselr', 24, 0)->nullable();
            $table->date('effdate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary2');
    }
}
