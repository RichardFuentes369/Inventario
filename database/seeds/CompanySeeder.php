<?php

use Illuminate\Database\Seeder;
use inventarios\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compani1 = Company::create([
    	    'id'	=> 1,
            'nit' => '3-5896-336',
        	'business_name'	=> 'Solsientic SA',
            'address' => 'Calle 34 a no 36 - 125',
            'country' => 'Colombia',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'phone1' => '6000000',
            'phone2' => '6000001',
            'cellphone1' => '3000000000',
            'cellphone2' => '3000000001',
            'description' => 'Empresa de consumo masivo',
            'email' => 'empresa1@gmail.com',
            'sector' => 'private',
    	]);
        $compani1->save();
    }
}
