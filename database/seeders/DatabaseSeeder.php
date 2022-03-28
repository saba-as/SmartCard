<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Str;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(1)->create([
            'name' => "Saba Abdulaziz",
            'email' => "admin@gmail.com",
            'password' => Hash::make('password'),
        ]);
    }
}
