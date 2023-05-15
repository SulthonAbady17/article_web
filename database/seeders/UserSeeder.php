<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::factory()->create([
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'author',
            'is_active' => false
        ]);

        User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'is_active' => true
        ]);
    }
}
