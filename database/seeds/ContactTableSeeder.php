<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'phone' => '(+2) 02 2860-9114',
            'fax' => '(+2) 02 2860-9117',
            'mobile' => '01050630681',
            'address' => 'Badr City, Cairo-Suez road, Postal code 11829',
            'address_arabic' => 'مدينة بدر طريق القاهرة السويس رمز بريدى 11829',
            'map_image' => 'dummy.png',
            'map_address' => 'dummy.png',
            'qr_image' => 'dummy.png',
        ]);
    }
}
