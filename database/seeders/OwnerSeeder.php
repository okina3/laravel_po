<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'あべ1',
                'email' => 'test@test1',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01/ 11:11:11'
            ],
            [
                'name' => 'あべ2',
                'email' => 'test@test2',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01/ 11:11:11'
            ],
            [
                'name' => 'あべ3',
                'email' => 'test@test3',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01/ 11:11:11'
            ],
        ]);
    }
}
