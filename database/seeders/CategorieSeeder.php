<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('categories')->insert([
            [
                'label' => "Vestibulum maximus",
            ],
            [
                'label' => "Nisi eu lobortis pharetra",
            ],
            [
                'label' => "Orci quam accumsan",
            ],
            [
                'label' => "Auguen pharetra massa",
            ],
            [
                'label' => "Tellus ut nulla",
            ],
            [
                'label' => "Etiam egestas viverra",
            ],
        ]);
    }
}
