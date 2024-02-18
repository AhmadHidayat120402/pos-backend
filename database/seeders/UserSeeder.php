<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dinamis
        User::factory(10)->create();

        // buat factory manual static data
        User::create([
            "name" => "Admin Dayat",
            "email" => "dayat@gmail.com",
            "password" => Hash::make('12345678'),
            "roles" => 'admin',
            'phone' => "086567654321",
        ]);
    }
}
