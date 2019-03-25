<?php

use Illuminate\Database\Seeder;
use inventarios\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
    	    'id'	=> 1,
        	'name'	=> 'James David',
            'lastname' => 'Rodriguez',
            'email' => 'prueba1@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '1098785729',
            'sexo' => 'M',
            'category' => 'admin',
            'phone' => '6390751',
            'cellphone' => '3203897294'
    	]);

        $user2 = User::create([
            'id'    => 2,
            'name'  => 'Radamel',
            'lastname' => 'Falcao Garcia',
            'email' => 'prueba2@gmail.com',
            'birthdate' => '1998-10-15',
            'dni' => '1098763254',
            'sexo' => 'M',
            'category' => 'seller',
            'phone' => '6380954',
            'cellphone' => '3213568975'
        ]);
    }
}