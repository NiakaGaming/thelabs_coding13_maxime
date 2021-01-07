<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            [
                'name' => "img_1",
                'img' => "/img/01.jpg",
            ],
            [
                'name' => "img_2",
                'img' => "/img/02.jpg",
            ],
        ]);
    }
}