<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_lives', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('campus_life_icon');
            $table->string('campus_life_title');
            $table->string('campus_life_title_arabic');
            $table->text('campus_life_home_description');
            $table->text('campus_life_home_description_arabic');
            
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
        Schema::dropIfExists('campus_lives');
    }
}
