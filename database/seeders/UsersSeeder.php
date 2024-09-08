<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' =>'Dom',
            'lastname'=>'Raposo',
            'email'=> 'tete@teste.com',
            'password' =>bcrypt('12345678'),

        ]);
    }
}
