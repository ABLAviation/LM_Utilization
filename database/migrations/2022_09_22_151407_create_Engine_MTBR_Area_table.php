<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineMTBRAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Engine_MTBR_Area', function (Blueprint $table) {
            $table->increments('ID_Engine_MTBR_Area');
            $table->string('Engine_variant', 250);
            $table->float('benign', 0, 0);
            $table->float('moderate', 0, 0);
            $table->float('harsh', 0, 0);
            $table->float('very_harsh', 0, 0);
            $table->string('SOURCE_OEM', 250)->nullable();
            $table->string('CreatedBy', 20)->nullable();
            $table->dateTime('CreationDate')->nullable();
            $table->string('ModifiedBy', 20)->nullable();
            $table->dateTime('ModificationDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Engine_MTBR_Area');
    }
}
