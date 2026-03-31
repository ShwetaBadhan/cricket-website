<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'vibrantick@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user->assignRole('admin');

    }
}