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
        	'nit'	=> '1-0000000',
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
        	'nit'	=> '1-0000001',
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
        	'nit'	=> '1-0000002',
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
        	'nit'	=> '1-0000003',
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
        	'nit'	=> '1-0000004',
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

        $provider6 = providers::create([
            'id'    => 6,
            'nit'   => '1-0000005',
            'business_name' => 'Jhonson & Jhonson',
            'country' => 'Colombia',
            'department' => 'Cundinamarca',
            'county' => 'Bogota',
            'neighborhood' => 'Street',
            'address' => 'Calle 93 # 93 - 125',
            'phone1' => '3101111120',
            'phone2' => '3101111121',
            'cellphone1' => '6011120',
            'cellphone2' => '6011121',
            'description' => 'Empresa de Jabones',
        ]);
        $provider6->save();

        $provider7 = providers::create([
            'id'    => 7,
            'nit'   => '1-0000006',
            'business_name' => 'Ebel',
            'country' => 'Colombia',
            'department' => 'Antioquia',
            'county' => 'Medellin',
            'neighborhood' => 'Comuna 3',
            'address' => 'Calle 35 # 35 - 5',
            'phone1' => '3101111122',
            'phone2' => '3101111123',
            'cellphone1' => '6011122',
            'cellphone2' => '6011123',
            'description' => 'Empresa de Belleza',
        ]);
        $provider7->save();

        $provider8 = providers::create([
            'id'    => 8,
            'nit'   => '1-0000007',
            'business_name' => 'Savital',
            'country' => 'Colombia',
            'department' => 'Cali',
            'county' => 'Valle del Cauca',
            'neighborhood' => 'Honda',
            'address' => 'Calle 135 # 135 - 33',
            'phone1' => '3101111124',
            'phone2' => '3101111125',
            'cellphone1' => '6011124',
            'cellphone2' => '6011125',
            'description' => 'Empresa de Shamppo',
        ]);
        $provider8->save();

        $provider9 = providers::create([
            'id'    => 9,
            'nit'   => '1-0000008',
            'business_name' => 'Ducales',
            'country' => 'Colombia',
            'department' => 'Cundinamarca',
            'county' => 'Bogota',
            'neighborhood' => 'Fontibon',
            'address' => 'Calle 5 # 5 - 25',
            'phone1' => '3101111126',
            'phone2' => '3101111127',
            'cellphone1' => '6011126',
            'cellphone2' => '6011127',
            'description' => 'Empresa de Comestibles',
        ]);
        $provider9->save();

        $provider10 = providers::create([
            'id'    => 10,
            'nit'   => '1-0000009',
            'business_name' => 'Festival',
            'country' => 'Colombia',
            'department' => 'Nariño',
            'county' => 'Hipiales',
            'neighborhood' => 'Panlindo',
            'address' => 'Calle 6 # 6 - 50',
            'phone1' => '3101111128',
            'phone2' => '3101111129',
            'cellphone1' => '6011128',
            'cellphone2' => '6011129',
            'description' => 'Empresa de Comestibles',
        ]);
        $provider10->save();

        $provider11 = providers::create([
            'id'    => 11,
            'nit'   => '1-0000010',
            'business_name' => 'Coca-Cola',
            'country' => 'Colombia',
            'department' => 'Antioquia',
            'county' => 'Comuna 6',
            'neighborhood' => 'Garcia Cadena',
            'address' => 'Calle 35 # 35 - 25',
            'phone1' => '3101111130',
            'phone2' => '3101111131',
            'cellphone1' => '6011130',
            'cellphone2' => '6011131',
            'description' => 'Empresa de Bebidas',
        ]);
        $provider11->save();

        $provider12 = providers::create([
            'id'    => 12,
            'nit'   => '1-0000011',
            'business_name' => 'Agula',
            'country' => 'Colombia',
            'department' => 'Santander',
            'county' => 'Bucaramanda',
            'neighborhood' => 'El country',
            'address' => 'Calle 35 # 35 - 25',
            'phone1' => '3101111132',
            'phone2' => '3101111133',
            'cellphone1' => '6011132',
            'cellphone2' => '6011133',
            'description' => 'Empresa de Bebidas',
        ]);
        $provider12->save();

        $provider13 = providers::create([
            'id'    => 13,
            'nit'   => '1-0000012',
            'business_name' => 'Pepsi',
            'country' => 'Colombia',
            'department' => 'Cali',
            'county' => 'Valle del Cauca',
            'neighborhood' => 'Saragosa',
            'address' => 'Calle 60 # 60 - 25',
            'phone1' => '3101111134',
            'phone2' => '3101111135',
            'cellphone1' => '6011134',
            'cellphone2' => '6011135',
            'description' => 'Empresa de Bebidas',
        ]);
        $provider13->save();
    }
}
