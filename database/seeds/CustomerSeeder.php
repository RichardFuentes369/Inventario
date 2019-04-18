<?php

use Illuminate\Database\Seeder;
use inventarios\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer1 = Customer::create([
    	    'id'	=> 1,
        	'name'	=> 'Antonio José',
            'lastname' => 'Rodriguez Villabona',
            'birthdate' => '1986-03-25',
            'document_type' => 'cc',
            'dni' => '1098111110',
            'sexo' => 'M',
            'phone' => '6021110',
            'cellphone' => '3202111110',
            'address' => 'cra 1 # 1 - 104',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'neighborhood' => 'Rosales',
            'email' => 'customer1@gmail.com',
            'companies_id' => 1,
    	]);
        $customer1->save();

		$customer2 = Customer::create([
    	    'id'	=> 2,
        	'name'	=> 'Maria Carmen',
            'lastname' => 'Rodriguez Zapata',
            'birthdate' => '1986-12-15',
            'document_type' => 'cc',
            'dni' => '1098111111',
            'sexo' => 'F',
            'phone' => '6021111',
            'cellphone' => '3202111111',
            'address' => 'calle 35 # 12 - 104',
            'department' => 'Santander',
            'county' => 'Bucaramanga',
            'neighborhood' => 'California',
            'email' => 'customer2@gmail.com',
            'companies_id' => 1,
    	]);
        $customer2->save();

		$customer3 = Customer::create([
    	    'id'	=> 3,
        	'name'	=> 'Carmen Cecilia',
            'lastname' => 'Gomez Salamanca',
            'birthdate' => '1998-11-01',
            'document_type' => 'cc',
            'dni' => '1098111112',
            'sexo' => 'F',
            'phone' => '6021112',
            'cellphone' => '3202111112',
            'address' => 'calle 12 # 12 - 45',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'neighborhood' => 'Caldas',
            'email' => 'customer3@gmail.com',
            'companies_id' => 1,
    	]);
        $customer3->save();

		$customer4 = Customer::create([
    	    'id'	=> 4,
        	'name'	=> 'José Luís',
            'lastname' => 'Peralta Serrano',
            'birthdate' => '1989-03-05',
            'document_type' => 'cc',
            'dni' => '1098111113',
            'sexo' => 'M',
            'phone' => '6021113',
            'cellphone' => '3201111113',
            'address' => 'calle 35 # 12 - 104',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'neighborhood' => 'Cañaveral',
            'email' => 'customer4@gmail.com',
            'companies_id' => 1,
    	]);
        $customer4->save();

		$customer5 = Customer::create([
    	    'id'	=> 5,
        	'name'	=> 'Laura Cristina',
            'lastname' => 'Rubio Molina',
            'birthdate' => '1990-03-25',
            'document_type' => 'cc',
            'dni' => '1098111114',
            'sexo' => 'F',
            'phone' => '6021114',
            'cellphone' => '3202111114',
            'address' => 'calle 15 # 12 - 104',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'neighborhood' => 'Villabel',
            'email' => 'customer5@gmail.com',
            'companies_id' => 1,
    	]);
        $customer5->save();
    }
}
