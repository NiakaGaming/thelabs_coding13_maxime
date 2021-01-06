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
                'icon' => "flaticon-023-flask",
                'title' => "GET IN THE LAB",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_2",
                'icon' => "flaticon-011-compass",
                'title' => "PROJECTS ONLINE",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                'name' => "service_3",
                'icon' => "flaticon-037-idea",
                'title' => "SMART MARKETING",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
        ]);
    }
}
