<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleArabicToBreakingNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breaking_news', function (Blueprint $table) {
            $table->string('news_title_arabic')->after('news_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breaking_news', function (Blueprint $table) {
            $table->dropColumn('news_title_arabic');
        });
    }
}
