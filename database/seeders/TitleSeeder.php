<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                'name' => "banner",
                'title' => "Get your freebie template now!",
            ],
            [
                'name' => "about",
                'title' => "GET IN THE LAB AND DISCOVER THE WORLD",
            ],
            [
                'name' => "testimonial",
                'title' => "WHAT OUR CLIENTS SAY",
            ],
            [
                'name' => "service",
                'title' => "GET IN THE LAB AND SEE THE SERVICES",
            ],
            [
                'name' => "team",
                'title' => "GET IN THE LAB AND MEET THE TEAM",
            ],
            [
                'name' => "promotion",
                'title' => "Are you ready to stand out?",
            ],
        ]);
    }
}
