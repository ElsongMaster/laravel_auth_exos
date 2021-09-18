<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
          [  "p1"=>"Freelancer is a free bootstrap theme created byStart Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.",
            "p2"=>"You can create your own custom avatar for the masthead, change the icon in the dividers, and add  your email address to the contact form to make it fully functional!",
            "link"=>"https://startbootstrap.com/theme/freelancer/",
          ]
        ]);
    }
}
