<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPartnerLinkToOurPartnersTable extends Migration
{
    public function up()
    {
        Schema::table('our_partners', function (Blueprint $table) {
            $table->string('partner_name')->nullable()->before('partner_image');
            $table->string('partner_link')->after('partner_image');
        });
    }

    public function down()
    {
        Schema::table('our_partners', function (Blueprint $table) {
            $table->dropColumn('partner_name');
            $table->dropColumn('partner_link');
        });
    }
}
