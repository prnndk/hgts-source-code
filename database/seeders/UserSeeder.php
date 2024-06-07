<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id' => 1,
                'name' => 'haloo',
                'email' => 'halo@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'id' => 2,
                'name' => 'testing',
                'email' => 'testing@gmail.com',
                'password' => bcrypt('password'),
            ]
        ];
        try {
            foreach ($userData as $data) {
                User::create($data);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
