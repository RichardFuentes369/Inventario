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
        	'name'	=> 'Javier Ricardo',
            'lastname' => 'Baron Fuentes',
            'email' => 'prueba1@gmail.com',
            'birthdate' => '1996-06-01',
            'dni' => '1098785729',
            'sexo' => 'M',
            'category' => 'administrador',
            'phone' => '6390751',
            'cellphone' => '3203897294'
    	]);
    }
}