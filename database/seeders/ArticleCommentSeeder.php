<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_comment')->insert([
            [
                'article_id' => 1,
                'comment_id' => 1,
            ], [
                'article_id' => 1,
                'comment_id' => 2,
            ],
        ]);
    }
}
