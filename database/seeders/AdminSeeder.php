<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'hakim.adni@gmail.com',
            'password' => Hash::make('123123'),
            'phone_number' => '08123123123',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
