<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '一般ユーザー',
            'email' => 'user@test.com',
            'password' => bcrypt('user12345'),
        ];
        DB::table('users')->insert($param);
    }
}
