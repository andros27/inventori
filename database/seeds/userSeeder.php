<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(array(
        	[
        		'name' 		=> 'Kevin',
        		'username' 	=> 'admin',
        		'email'		=> 'amedia92@gmail.com',
                'no_telp'   => '085726053851',
        		'jabatan'	=>	'Pemilik',
        		'password'	=>	bcrypt('12345678'),
        	],
        ));
    }
}
