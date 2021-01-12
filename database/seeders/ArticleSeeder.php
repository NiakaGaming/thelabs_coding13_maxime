<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => "Je suis un article",
                'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consequatur, illum facere praesentium nisi illo ad necessitatibus nemo rem autem omnis quidem impedit ut culpa. Quibusdam, pariatur? Commodi quo totam ex accusamus ad dolor cumque natus, itaque dolore sit unde ea facilis, architecto nostrum necessitatibus at eveniet voluptatum repellendus animi.",
                'user_id' => 1,
            ],
            [
                'title' => "Je suis un autre article",
                'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consequatur, illum facere praesentium nisi illo ad necessitatibus nemo rem autem omnis quidem impedit ut culpa. Quibusdam, pariatur? Commodi quo totam ex accusamus ad dolor cumque natus, itaque dolore sit unde ea facilis, architecto nostrum necessitatibus at eveniet voluptatum repellendus animi.",
                'user_id' => 2,
            ],
        ]);
    }
}
