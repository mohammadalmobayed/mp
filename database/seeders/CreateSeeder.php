<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user= [
        [
            'name'=>'User',
            'email'=>'user@gmail.com',
            'phone'=>'0778080925',
            'password'=>bcrypt('123456789'),
            'role'=> 0
        ],
        [
            'name'=>'editor',
            'email'=>'editor@gmail.com',
            'phone'=>'0778080926',
            'password'=>bcrypt('123456789'),
            'role'=> 1
        ],
        [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'phone'=>'0778080927',
            'password'=>bcrypt('123456789'),
            'role'=> 2
        ],
        [
            'name'=>'superAdmin',
            'email'=>'superAdmin@gmail.com',
            'phone'=>'0778080928',
            'password'=>bcrypt('123456789'),
            'role'=> 3
        ]
            
        ];
        foreach($user as $user)
        {
            User::create($user);
        }
    }
}
