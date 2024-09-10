<?php

namespace Database\Seeders;

use App\Models\Note; //add this
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,  //add new this 
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> bcrypt('pass123.') //also add new this 
        ]);

        Note ::factory(100)->create();
    }
}


