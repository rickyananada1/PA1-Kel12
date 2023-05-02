<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Admin betatudia',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
