<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@lexvin.com'], 
            [
                'name' => 'Super Admin',   
                'password' => Hash::make('password123'),
            ]
        );
    }
}