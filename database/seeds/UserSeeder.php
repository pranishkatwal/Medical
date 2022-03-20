<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->insert(
            [
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'name' => 'Asmita',
                'profile_photo' =>'photo1',
                'role_id' => 1
            ]);
    }
}
