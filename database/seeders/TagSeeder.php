<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'label' => "branding",
            ],
            [
                'label' => "identity",
            ],
            [
                'label' => "video",
            ],
            [
                'label' => "design",
            ],
            [
                'label' => "inspiration",
            ],
            [
                'label' => "web design",
            ],
            [
                'label' => "photography",
            ],
            [
                'label' => "html",
            ],
            [
                'label' => "css",
            ],
            [
                'label' => "php",
            ],
            [
                'label' => "laravel",
            ],
        ]);
    }
}
