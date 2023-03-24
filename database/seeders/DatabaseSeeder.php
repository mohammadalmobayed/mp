<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
