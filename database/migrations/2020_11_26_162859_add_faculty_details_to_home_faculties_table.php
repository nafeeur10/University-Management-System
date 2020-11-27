<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacultyDetailsToHomeFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_faculties', function (Blueprint $table) {
            $table->string('faculty_details_title')->after('home_faculty_link');
            $table->string('faculty_details_title_arabic')->after('home_faculty_link');
            $table->string('faculty_details_description')->after('home_faculty_link');
            $table->string('faculty_details_description_arabic')->after('home_faculty_link');
            $table->string('faculty_details_student_guide')->after('home_faculty_link');
            $table->string('faculty_details_organizational_structure')->after('home_faculty_link');
            $table->string('faculty_details_course')->after('home_faculty_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_faculties', function (Blueprint $table) {
            $table->dropColumn('faculty_details_title');
            $table->dropColumn('faculty_details_title_arabic');
            $table->dropColumn('faculty_details_description');
            $table->dropColumn('faculty_details_description_arabic');
            $table->dropColumn('faculty_details_student_guide');
            $table->dropColumn('faculty_details_organizational_structure');
            $table->dropColumn('faculty_details_course');
        });
    }
}
