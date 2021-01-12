<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_articles')->insert([
            [
                'article_id' => 1,
                'tag_id' => 3,
            ],
            [
                'article_id' => 1,
                'tag_id' => 4,
            ],
        ]);
    }
}
