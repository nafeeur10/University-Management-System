<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_events', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('event_title');
            $table->string('event_title_arabic');

            $table->text('event_description');
            $table->text('event_description_arabic');

            $table->date('event_date');
            $table->string('event_start_time');
            $table->string('event_end_time');
            
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
        Schema::dropIfExists('home_events');
    }
}
