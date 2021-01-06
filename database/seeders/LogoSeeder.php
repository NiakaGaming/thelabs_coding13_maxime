<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
            [
                'img' => "/img/big-logo.png",
                'img_resize' => "/img/logo.png",
            ],
        ]);
    }
}
