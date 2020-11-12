<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_faculties', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('home_faculty_image');

            $table->string('home_faculty_title');
            $table->string('home_faculty_title_arabic');

            $table->text('home_faculty_description');
            $table->text('home_faculty_description_arabic');

            $table->string('home_faculty_link');
            
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
        Schema::dropIfExists('home_faculties');
    }
}
