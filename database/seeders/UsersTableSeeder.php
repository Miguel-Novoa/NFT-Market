<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
              'email' => 'john@example.com',
              'password' => bcrypt('password'),
              'isAdmin' => false,
              'wallet' => 127.05
            ],
            [
                'email' => 'olivia@nft.com',
                'password' => bcrypt('olivia'),
                'isAdmin' => true,
                'wallet' => 12000
              ],
        ];

        foreach ($data as $userData) {
            User::create([
                'email' => $userData['email'],
                'password' => $userData['password'],
                'isAdmin' => $userData['isAdmin'],
                'wallet' => $userData['wallet'],
            ]);
        }
    }
}
