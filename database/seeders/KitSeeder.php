<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'kit1'
            ],
            [
                'name' => 'kit2'
            ],
            [
                'name' => 'kit3'
            ]
        ];
        DB::table('kits')->insert($data);
    }
}
