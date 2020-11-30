<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_tabs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('faculty_id');
            $table->string('faculty_tab_image');

            $table->string('faculty_tab_title');
            $table->string('faculty_tab_title_arabic');

            $table->string('faculty_tab_icon')->nullable();
            
            $table->text('faculty_tab_description');
            $table->text('faculty_tab_description_arabic');

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
        Schema::dropIfExists('faculty_tabs');
    }
}
