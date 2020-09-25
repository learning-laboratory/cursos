<?php

use Illuminate\Database\Seeder;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles = ['Administrator','Gerente','Profissional','Empresa','Cliente'];
        
        foreach ($roles as $role) {
	        DB::table('roles')->insert(['name'=>$role,'created_at'=>now()]);
    	}

    }
}
