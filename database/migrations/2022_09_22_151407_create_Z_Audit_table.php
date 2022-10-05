<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZAuditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Z_Audit', function (Blueprint $table) {
            $table->increments('ID_audit');
            $table->string('Database_Name', 250)->nullable();
            $table->integer('Session_id')->nullable();
            $table->string('Host_Name', 250)->nullable();
            $table->string('Program_name', 250)->nullable();
            $table->string('client_interface_name', 250)->nullable();
            $table->string('login_name', 250)->nullable();
            $table->dateTime('login_time')->nullable();
            $table->string('nt_domain', 250)->nullable();
            $table->string('nt_user_name', 250)->nullable();
            $table->string('client_net_address', 250)->nullable();
            $table->string('local_net_address', 250)->nullable();
            $table->string('ObjName', 250)->nullable();
            $table->text('Query')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Z_Audit');
    }
}
