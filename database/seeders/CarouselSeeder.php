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
                'name' => "image_01",
                'img' => "01.jpg",
            ],
            [
                'name' => "image_02",
                'img' => "02.jpg",
            ],
        ]);
    }
}
