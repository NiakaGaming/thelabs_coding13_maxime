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
        ]);
    }
}
