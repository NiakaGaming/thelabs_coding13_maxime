<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            NavSeeder::class,
            IconSeeder::class,
            LogoSeeder::class,
            CarouselSeeder::class,
            ServiceSeeder::class,
            TitleSeeder::class,
            AboutSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            ChoiceSeeder::class,
            VideoSeeder::class,
            ContactFormSeeder::class,
            CategorieSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
            ArticleTagSeeder::class,
            ArticleCategorieSeeder::class,
            CommentSeeder::class,
            ProfilSeeder::class,
            MapSeeder::class,
            ContactMailSeeder::class,
        ]);
    }
}
