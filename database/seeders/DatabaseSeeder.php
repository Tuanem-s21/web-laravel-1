<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'firstname' => 'abc',
            'lastname' => 'admin',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123456789'),
            
            'created_at' => new \DateTime(),
        ]);
    }
}
