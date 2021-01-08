<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_staff', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('dept_id');
            $table->string('staff_name');
            $table->string('staff_name_arabic');
            $table->string('staff_designation');
            $table->string('staff_designation_arabic');
            $table->string('staff_resume');

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
        Schema::dropIfExists('dept_staff');
    }
}
