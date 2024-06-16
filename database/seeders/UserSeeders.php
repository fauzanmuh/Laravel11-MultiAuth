<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Fauzan',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('fauzan'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Angga',
            'email' => 'user@gmail.com',
            'usertype' => 'user',
            'email_verified_at' => now(),
            'password' => bcrypt('angga'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
