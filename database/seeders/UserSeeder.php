<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => 'Adm@2022',
                'role' => 'Administrative',
                'group_id' => 1
            ],
            [
                'name' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => 'Adm@2022',
                'role' => 'Teacher',
                'group_id' => 2
            ],
            [
                'name' => 'Student',
                'email' => 'student@robotics.com',
                'password' => 'Adm@2022',
                'role' => 'Student',
                'group_id' => 3
            ]
        ];
        DB::table('users')->insert($data);
    }
}
