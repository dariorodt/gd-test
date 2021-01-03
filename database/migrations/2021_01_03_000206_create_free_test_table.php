<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_test_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('email');
            $table->boolean('can_send_email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('job');
            $table->string('department');
            $table->string('company_name');
            $table->string('nif');
            $table->integer('employees_count');
            $table->string('password');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('free_test');
    }
}
