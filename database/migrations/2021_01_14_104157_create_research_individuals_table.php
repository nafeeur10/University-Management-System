<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_individuals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('research_individual_title');
            $table->string('research_individual_title_arabic');
            $table->text('research_individual_description');
            $table->text('research_individual_description_arabic');
            $table->string('research_individual_image');

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
        Schema::dropIfExists('research_individuals');
    }
}
