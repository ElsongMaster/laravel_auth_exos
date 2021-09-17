<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('titres')->insert([
            [
                "h1Header"=>"Start Bootstrap",
                "h2Portfolio"=>"Portfolio",
                "h2About"=>"About",
                "h2Contact"=>"Contact",
            ]
            ]);
    }
}
