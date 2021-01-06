<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                'name' => "flask",
                'class' => "flaticon-023-flask",
            ],
            [
                'name' => "compass",
                'class' => "flaticon-011-compass",
            ],
            [
                'name' => "idea",
                'class' => "flaticon-037-idea",
            ],
        ]);
    }
}
