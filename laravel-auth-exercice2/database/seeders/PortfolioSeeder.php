<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
               
                "imgLink"=>"cabin.png",
                "targetModal"=>"portfolioModal1",
            ],
            [
               
                "imgLink"=>"cake.png",
                "targetModal"=>"portfolioModal2",
            ],
            [
               
                "imgLink"=>"circus.png",
                "targetModal"=>"portfolioModal3",
            ],
            [
               
                "imgLink"=>"game.png",
                "targetModal"=>"portfolioModal4",
            ],
            [
               
                "imgLink"=>"safe.png",
                "targetModal"=>"portfolioModal5",
            ],
            [
               
                "imgLink"=>"submarine.png",
                "targetModal"=>"portfolioModal6",
            ]

            ]);
    }
}
