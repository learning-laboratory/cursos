<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	'id'		=>  1,
        	'name'		=>	'Threes',
        	'email'		=>	'threes@gmail.com',
        	'password'	=>	bcrypt('threescms'),
        	'is_active'	=>  1,
        	'role_id'	=>	1,
        	'created_at'=> now()
        ];
    
        DB::table('users')->insert($user);
    }
}
