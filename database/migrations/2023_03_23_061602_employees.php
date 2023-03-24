<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->char('employee_id', 10);
            $table->foreignId('dept_id')->references('id')->on('departments');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middle_name');
            $table->string('name_ext')->nullable();
            $table->string('gender');
            $table->string('position');
            $table->string('role');
            $table->string('email')->unique();
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
        Schema::drop('employees');
    }
}
