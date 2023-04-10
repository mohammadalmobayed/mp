<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HousingInfo;
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
            [   'job_id' => 1270,
                'name'=>'User',
                'email'=>'user@gmail.com',
                'phone'=>'0778080925',
                'password'=>bcrypt('123456789'),
                'role'=> 0
            ],
            [
                'job_id' => 1271,
                'name'=>'editorA',
                'email'=>'editorA@gmail.com',
                'phone'=>'0778080926',
                'password'=>bcrypt('123456789'),
                'role'=> 1,
                'sup_role' =>'A'
            ],
            [
                'job_id' => 1272,
                'name'=>'editorB',
                'email'=>'editorB@gmail.com',
                'phone'=>'0778080927',
                'password'=>bcrypt('123456789'),
                'role'=> 1,
                'sup_role' =>'B'

            ],
            [
                'job_id' => 1273,
                'name'=>'editorH',
                'email'=>'editorH@gmail.com',
                'phone'=>'0778080928',
                'password'=>bcrypt('123456789'),
                'role'=> 1,
                'sup_role' =>'Hidab'

            ],
            [
                'job_id' => 1274,
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'phone'=>'0778080929',
                'password'=>bcrypt('123456789'),
                'role'=> 2
            ],
            [
                'job_id' => 1275,
                'name'=>'superAdmin',
                'email'=>'superAdmin@gmail.com',
                'phone'=>'0778080920',
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
        HousingInfo::create([
            'total_students'=>0,
            'total_dorms'=>0,
            'total_rooms'=>0,
            'rooms_occupied'=>0,
            'rooms_vacant'=>0,
        ]);
        
    }
}
