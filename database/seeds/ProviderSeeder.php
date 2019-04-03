<?php

use Illuminate\Database\Seeder;
use inventarios\providers;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provider1 = providers::create([
    	    'id'	=> 1,
        	'NIT'	=> '1-0000000',
            'business_name' => 'Dersa',
            'country' => 'Colombia',
            'department' => 'Cundinamarca',
            'county' => 'Bogota',
            'neighborhood' => 'Alcachofas',
            'address' => 'Carrera 11 b # 11b - 5',
            'phone1' => '3101111110',
            'phone2' => '3101111111',
            'cellphone1' => '6011110',
            'cellphone2' => '6011111',
            'description' => 'Empresa de Jabones',
    	]);
        $provider1->save();

        $provider2 = providers::create([
    	    'id'	=> 2,
        	'NIT'	=> '1-0000001',
            'business_name' => 'Tigre',
            'country' => 'Colombia',
            'department' => 'Cundinamarca',
            'county' => 'La Calera',
            'neighborhood' => 'Patrick',
            'address' => 'Carrera 1a # 1a - 35',
            'phone1' => '3101111112',
            'phone2' => '3101111113',
            'cellphone1' => '6011112',
            'cellphone2' => '6011113',
            'description' => 'Empresa de Jabones',
    	]);
        $provider2->save();

        $provider3 = providers::create([
    	    'id'	=> 3,
        	'NIT'	=> '1-0000002',
            'business_name' => 'Wash',
            'country' => 'Colombia',
            'department' => 'Cali',
            'county' => 'Valle del Cauca',
            'neighborhood' => 'Snake',
            'address' => 'Calle 25 # 25 - 25',
            'phone1' => '3101111114',
            'phone2' => '3101111115',
            'cellphone1' => '6011114',
            'cellphone2' => '6011115',
            'description' => 'Empresa de Jabones',
    	]);
        $provider3->save();

        $provider4 = providers::create([
    	    'id'	=> 4,
        	'NIT'	=> '1-0000003',
            'business_name' => 'Colgate',
            'country' => 'Colombia',
            'department' => 'Antioquia',
            'county' => 'Medellin',
            'neighborhood' => 'Comuna 13',
            'address' => 'Carrera 11 b # 11b - 30',
            'phone1' => '3101111116',
            'phone2' => '3101111117',
            'cellphone1' => '6011116',
            'cellphone2' => '6011117',
            'description' => 'Empresa de Higiene Dental',
    	]);
        $provider4->save();

        $provider5 = providers::create([
    	    'id'	=> 5,
        	'NIT'	=> '1-0000004',
            'business_name' => 'Ego',
            'country' => 'Colombia',
            'department' => 'Nariño',
            'county' => 'Hipiales',
            'neighborhood' => 'Sesped',
            'address' => 'Calle 35 # 35 - 25',
            'phone1' => '3101111118',
            'phone2' => '3101111119',
            'cellphone1' => '6011118',
            'cellphone2' => '6011119',
            'description' => 'Empresa de Shamppo',
    	]);
        $provider5->save();
    }
}
