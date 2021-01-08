<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeptLinkToFacultyDeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculty_depts', function (Blueprint $table) {
            $table->string('dept_url')->after('dept_name_arabic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculty_depts', function (Blueprint $table) {
            $table->dropColumn('dept_url');
        });
    }
}
