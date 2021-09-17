<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_data')->insert([
            [
                "avatar"=>"avataaars.svg",
                "skills"=>"Graphic Artist - Web Designer - Illustrator",
            ]
            ]);
    }
}
