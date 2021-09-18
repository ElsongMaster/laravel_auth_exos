<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "street"=>"2215 John Daniel Drive",
                "city"=>" Clark, MO 65243",
                "facebook"=>"!",
                "twitter"=>"!",
                "linkedin"=>"!",
                "dribble"=>"!",
                "linkTemplate"=>"http://startbootstrap.com",


            ]
            ]);
    }
}
