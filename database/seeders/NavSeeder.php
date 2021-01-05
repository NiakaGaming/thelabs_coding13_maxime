<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->insert([
            [
                'link' => "Home",
            ],
            [
                'link' => "Services",
            ],
            [
                'link' => "Blog",
            ],
            [
                'link' => "Contact",
            ],
        ]);
    }
}
