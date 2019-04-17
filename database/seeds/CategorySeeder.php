<?php

use Illuminate\Database\Seeder;
use inventarios\categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = categories::create([
    	    'id'	=> 1,
        	'category_name'	=> 'Jabones en polvo',
            'description' => 'Jabones en polvo',
            'companies_id' => '1',
    	]);
        $category1->save();

        $category2 = categories::create([
    	    'id'	=> 2,
        	'category_name'	=> 'Jabones en barra',
            'description' => 'Jabones en barra (personal y domestico)',
            'companies_id' => '1',
    	]);
        $category2->save();

        $category3 = categories::create([
    	    'id'	=> 3,
        	'category_name'	=> 'Jabones liquidos',
            'description' => 'Jabones para uso diario',
            'companies_id' => '1',
    	]);
        $category3->save();

        $category4 = categories::create([
    	    'id'	=> 4,
        	'category_name'	=> 'Crema de dientes',
            'description' => 'Cremas de dientes de todo tipo',
            'companies_id' => '1',
    	]);
        $category4->save();

        $category5 = categories::create([
    	    'id'	=> 5,
        	'category_name'	=> 'Shampoo',
            'description' => 'Shampoo para hombre y mujer',
            'companies_id' => '1',
    	]);
        $category5->save();

        $category6 = categories::create([
            'id'    => 6,
            'category_name' => 'Bebidas Alcoholocas',
            'description' => 'Cervezas, Refajos',
            'companies_id' => '1',
        ]);
        $category6->save();

        $category7 = categories::create([
            'id'    => 7,
            'category_name' => 'Bebidas Refrescantes',
            'description' => 'Gaseosas, Aguas, Energizantes',
            'companies_id' => '1',
        ]);
        $category7->save();

        $category8 = categories::create([
            'id'    => 8,
            'category_name' => 'Galletas y Pasabocas',
            'description' => 'Todo tipo de galletas',
            'companies_id' => '1',
        ]);
        $category8->save();
    }
}
