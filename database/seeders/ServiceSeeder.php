<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => "service_1",
                'icon_id' => 1,
                'title' => "GET IN THE LAB",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_2",
                'icon_id' => 2,
                'title' => "PROJECTS ONLINE",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_3",
                'icon_id' => 3,
                'title' => "SMART MARKETING",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_4",
                'icon_id' => 4,
                'title' => "SMART MARKETING",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_5",
                'icon_id' => 5,
                'title' => "Brainstorming",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_6",
                'icon_id' => 6,
                'title' => "Documented",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_7",
                'icon_id' => 7,
                'title' => "Responsive",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_8",
                'icon_id' => 8,
                'title' => "Retina ready",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_9",
                'icon_id' => 9,
                'title' => "Ultra modern",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_10",
                'icon_id' => 10,
                'title' => "Social Media",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
        ]);
    }
}
