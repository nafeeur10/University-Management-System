<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSliderImageToHomeSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_sliders', function (Blueprint $table) {
            $table->string('slider_main_image')->after('id');
            $table->string('slider_title_image');
            $table->string('slider_label');
            $table->string('slider_button_text');
            $table->string('slider_button_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_sliders', function (Blueprint $table) {
            $table->dropColumn('slider_main_image');
            $table->dropColumn('slider_title_image');
            $table->dropColumn('slider_label');
            $table->dropColumn('slider_button_text');
            $table->dropColumn('slider_button_link');
        });
    }
}
