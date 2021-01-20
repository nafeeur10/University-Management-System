<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_links', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('research_link_url')->nullable();
            $table->string('research_link_upload')->nullable();
            $table->string('research_title');
            $table->string('research_title_arabic');
            
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
        Schema::dropIfExists('research_links');
    }
}
