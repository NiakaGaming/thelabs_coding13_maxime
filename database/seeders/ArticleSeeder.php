<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'img' => "blog-1.jpg",
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Je suis un autre article",
                'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consequatur, illum facere praesentium nisi illo ad necessitatibus nemo rem autem omnis quidem impedit ut culpa. Quibusdam, pariatur? Commodi quo totam ex accusamus ad dolor cumque natus, itaque dolore sit unde ea facilis, architecto nostrum necessitatibus at eveniet voluptatum repellendus animi.",
                'img' => "blog-2.jpg",
                'user_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Je suis un 3eme article",
                'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consequatur, illum facere praesentium nisi illo ad necessitatibus nemo rem autem omnis quidem impedit ut culpa. Quibusdam, pariatur? Commodi quo totam ex accusamus ad dolor cumque natus, itaque dolore sit unde ea facilis, architecto nostrum necessitatibus at eveniet voluptatum repellendus animi.",
                'img' => "blog-3.jpg",
                'user_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
