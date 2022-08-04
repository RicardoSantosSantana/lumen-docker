<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = array('password' => Hash::make('secret'), 'avatar_url' => 'http://localhost:8000/avatar/user.jpg');

        \App\Models\User::factory()->count(30)->create($usuario);
    }
}
