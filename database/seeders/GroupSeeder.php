<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Grupo1'
            ],
            [
                'name' => 'Grupo2'
            ],
            [
                'name' => 'Grupo3'
            ]
        ];
        DB::table('groups')->insert($data);
    }
}
