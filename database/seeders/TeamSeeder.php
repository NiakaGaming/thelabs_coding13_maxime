<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'first_name' => "Max",
                'last_name' => "VdB",
                'function' => "CEO",
                'img' => "1.jpg",
            ],
            [
                'first_name' => "Jo",
                'last_name' => "Cubbido",
                'function' => "SEO",
                'img' => "2.jpg",
            ],
            [
                'first_name' => "Martin",
                'last_name' => "Manverel",
                'function' => "Web Developer",
                'img' => "3.jpg",
            ],
            [
                'first_name' => "Fanny",
                'last_name' => "Hunin",
                'function' => "Web Designer",
                'img' => "1.jpg",
            ],
        ]);
    }
}
