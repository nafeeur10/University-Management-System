<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyDeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_depts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('dept_faculty_image');
            $table->string('dept_name');
            $table->string('dept_name_arabic');
            $table->text('dept_short_description')->nullable();
            $table->text('dept_short_description_arabic')->nullable();
            $table->string('dept_image');
            $table->text('dept_main_description');
            $table->text('dept_main_description_arabic');
            
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
        Schema::dropIfExists('faculty_depts');
    }
}
