<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profils')->insert([
            [
                'img' => "01.jpg",
                'description' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
                'function' => "CEO",
                'user_id' => 1,
            ],
            [
                'img' => "02.jpg",
                'description' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
                'function' => "Web Developer",
                'user_id' => 2,
            ],
        ]);
    }
}
