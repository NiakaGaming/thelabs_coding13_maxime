<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Niaka",
                'email' => "niaka@hotmail.com",
                'password' => Hash::make("niaka@hotmail.com"),
            ],
            [
                'name' => "Max",
                'email' => "max@hotmail.com",
                'password' => Hash::make("max@hotmail.com"),
            ],
        ]);
    }
}
