<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_articles')->insert([
            [
                'article_id' => 1,
                'categorie_id' => 3,
            ],
            [
                'article_id' => 1,
                'categorie_id' => 4,
            ],
        ]);
    }
}
