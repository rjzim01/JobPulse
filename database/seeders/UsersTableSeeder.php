<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                //'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'roll' => 'Admin',
                'status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
