<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHomeNewsDescriptionToLatestNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('latest_news', function (Blueprint $table) {
            $table->text('news_home_description')->after('news_home_title_arabic');
            $table->text('news_home_description_arabic')->after('news_home_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('latest_news', function (Blueprint $table) {
            $table->dropColumn('news_home_description');
            $table->dropColumn('news_home_description_arabic');
        });
    }
}
