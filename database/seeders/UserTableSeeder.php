<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'adminppdb@gmail.com', 
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(20),
            'status' => 'active'
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('siswa'),
            'remember_token' => Str::random(20),
            'status' => 'inactive'
        ]);
    }
}