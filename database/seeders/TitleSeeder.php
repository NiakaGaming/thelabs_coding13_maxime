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
                'title' => "Get in <span>the Lab</span> and discover the world",
            ],
            [
                'name' => "testimonial",
                'title' => "What our clients say",
            ],
            [
                'name' => "service",
                'title' => "Get in <span>the Lab</span> and see the services",
            ],
            [
                'name' => "team",
                'title' => "Get in <span>the Lab</span> and  meet the team",
            ],
            [
                'name' => "promotion",
                'title' => "Are you ready to stand out?",
            ],
            [
                'name' => "promotion_btn",
                'title' => "Browse",
            ],
        ]);
    }
}
