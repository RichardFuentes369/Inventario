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
            'birthdate' => '1996-06-01',
            'document_type' => 'cc',
            'dni' => '1098785729',
            'sexo' => 'M',
            'phone' => '6390751',
            'cellphone' => '3203897294',
            'address' => 'calle 5 # 12 - 104',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'neighborhood' => 'Villabel',
            'email' => 'prueba1@gmail.com',
            'category' => 'admin',
            'companies_id' => 1,
    	]);
        $user1->save();

        $user2 = User::create([
            'id'    => 2,
            'name'  => 'Radamel',
            'lastname' => 'Falcao Garcia',
            'birthdate' => '1998-10-15',
            'dni' => '1098763254',
            'document_type' => 'cc',
            'sexo' => 'M',
            'phone' => '6380954',
            'cellphone' => '3213568975',
            'address' => 'calle 5 # 12 - 104',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'neighborhood' => 'La Cumbre',
            'email' => 'prueba2@gmail.com',
            'category' => 'seller',
            'companies_id' => 1,
        ]);
        $user2->save();
    }
}
