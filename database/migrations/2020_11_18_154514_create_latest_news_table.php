<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latest_news', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('news_home_title');
            $table->string('news_home_title_arabic');

            $table->string('news_single_title');
            $table->string('news_single_title_arabic');

            $table->text('news_description');
            $table->text('news_description_arabic');

            $table->text('news_slider_description')->nullable();
            $table->text('news_slider_description_arabic')->nullable();

            $table->date('news_date');

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
        Schema::dropIfExists('latest_news');
    }
}
