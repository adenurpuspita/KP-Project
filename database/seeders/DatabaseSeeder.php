<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'adee',
        //     'email' => 'adekiyowo@gmail.com',
        //     'password' => Hash::make('123')
        // ]);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
