<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_basics', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('research_title');
            $table->string('research_title_arabic');
            $table->text('research_description');
            $table->text('research_description_arabic');
            $table->string('research_homepage_image');
            $table->string('research_details_main_image');

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
        Schema::dropIfExists('research_basics');
    }
}
