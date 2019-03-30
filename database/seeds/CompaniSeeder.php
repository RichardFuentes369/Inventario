<?php

use Illuminate\Database\Seeder;
use inventarios\companies;

class CompaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compani1 = companies::create([
    	    'id'	=> 1,
        	'business_name'	=> 'Solsientic SA',
            'address' => 'Calle 34 a no 36 - 125',
            'country' => 'Colombia',
            'department' => 'Santander',
            'county' => 'Floridablanca',
            'phone1' => '6387521',
            'phone2' => '7856925    ',
            'cellphone1' => '3208569874',
            'cellphone2' => '3112548965',
            'description' => 'Empresa de consumo masivo',
            'email' => 'empresa1@gmail.com',
            'sector' => 'private',
    	]);
        $compani1->save();
    }
}