<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_categorie')->insert([
            [
                'article_id' => 1,
                'categorie_id' => 3,
            ],
            [
                'article_id' => 1,
                'categorie_id' => 4,
            ],
            [
                'article_id' => 2,
                'categorie_id' => 2,
            ],
        ]);
    }
}
