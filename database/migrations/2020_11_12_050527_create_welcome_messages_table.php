<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomeMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome_messages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('welcome_message_title');
            $table->string('welcome_message_title_arabic');

            $table->text('welcome_description');
            $table->text('welcome_description_arabic');

            $table->string('welcome_signature');
            
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
        Schema::dropIfExists('welcome_messages');
    }
}
