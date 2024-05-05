<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = User::factory()->create([
            'name' => 'komsy',
            'email' => 'komsy@gmail.com',
            'username' => 'komsy',
            'is_admin' => true,
            'status' => true,
            'password' => bcrypt('@komsy4820'),
        ]);
        $user1 = User::factory()->create([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'username' => 'ADMIN',
            'is_admin' => true,
            'status' => true,
            'password' => bcrypt('@admin4820'),
        ]);
    }
}
