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
            ['email' => 'lexvinlawfirm@gmail.com'], 
            [
                'name' => 'Super Admin',   
                'password' => Hash::make('123password'),
            ]
        );
    }
}