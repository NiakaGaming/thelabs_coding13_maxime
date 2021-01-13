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
                'last_name' => "Ishigame",
                'first_name' => "Niaka",
                'email' => "niaka@hotmail.com",
                'password' => Hash::make("niaka@hotmail.com"),
            ],
            [
                'last_name' => "VdB",
                'first_name' => "Max",
                'email' => "max@hotmail.com",
                'password' => Hash::make("max@hotmail.com"),
            ],
        ]);
    }
}
