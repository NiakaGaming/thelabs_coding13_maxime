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
            NavSeeder::class,
            IconSeeder::class,
            LogoSeeder::class,
            CarouselSeeder::class,
            ServiceSeeder::class,
            TitleSeeder::class,
            AboutSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
