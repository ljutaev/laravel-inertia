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
        User::create([
            'name' => 'Sasha Ljutaev',
            'email' => 'test@test.com',
            'password' => bcrypt('password')
        ]);
    }
}
