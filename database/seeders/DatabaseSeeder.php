<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        \App\Models\User::create([
            'name' => 'TD Admin',
            'email' => 'vencer.technodream@gmail.com',
            'password' => Hash::make('vencer.technodream@gmail.com'),
            'role' => 'td-admin'
        ]);

        \App\Models\User::create([
            'name' => 'TD User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'role' => 'td-user'
        ]);
    }
}
