<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users__seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'father_last_name'=>'Admin',
            'mother_last_name'=>'Admin',
            'email'=>'admin@example.com',
            'password'=>bcrypt('password'),
            'phone_number'=>'1234567890',
            'address'=>'123 Admin Street',
            'user_name'=>'admin',
            'profile_image'=>'default.png',
            'level'=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
         DB::table('users')->insert([
            'name'=>'Pamela Itzel',
            'father_last_name'=>'Garcia',
            'mother_last_name'=>'Tarelo',
            'email'=>'pamela@gmail.com',
            'password'=>bcrypt('123456'),
            'phone_number'=>'1234567890',
            'address'=>'123 Pame Street',
            'user_name'=>'pame',
            'profile_image'=>'default.png',
            'level'=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);

    }
}
