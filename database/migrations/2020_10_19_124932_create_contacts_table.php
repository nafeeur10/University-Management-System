<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('phone');
            $table->string('fax');
            $table->string('mobile');
            $table->string('mobile_optional1')->nullable();
            $table->string('mobile_optional2')->nullable();
            $table->text('address');
            $table->text('address_arabic');

            $table->text('map_image')->nullable();
            $table->text('map_address');
            $table->text('qr_image')->nullable();


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
        Schema::dropIfExists('contacts');
    }
}
