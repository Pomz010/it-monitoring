<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_lists', function (Blueprint $table) {
            $table->id();
            $table->char('employee_id', 10)->unique();
            $table->foreignId('dept_id')->references('id')->on('departments');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_ext')->nullable();
            $table->string('middle_name');
            $table->string('gender');
            $table->string('position');
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
        Schema::dropIfExists('employee_lists');
    }
}
